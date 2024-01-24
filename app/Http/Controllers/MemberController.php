<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\MemberType;
use Illuminate\Support\Str;
use App\Models\MemberDetail;
use App\Models\MemberAddress;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Member\MemberRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function create()
    {
        $memberTypes = MemberType::get();

        return view('home.pages.members.create', compact('memberTypes'));
    }

    public function memberType($id)
    {
        $type = MemberType::findOrFail($id);

        $type = $type->only(['name', 'administrative_cost', 'principal_saving', 'mandatory_saving', 'special_mandatory_saving']);


        if ($type) {
            return response()->json([
                'message' => 'Type found!',
                'type' => $type,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Type found!',
                'type' => null,
            ], 200);
        }
    }

    public function store(MemberRegisterRequest $request)
    {
        $data = $request->validated();
        $type = MemberType::findOrFail($data['member_type_id']);

        $data['remember_token'] = Str::random(10);
        $data['password'] = Hash::make($data['phone']);
        $data['email_verified_at'] = now();

        if (!$this->validateData($data, $type)) {
            return redirect()->back()->withInput()->withErrors(['message' => 'Data tidak valid, silahkan ulangi pengisian data.']);
        }

        $response = $this->getCoordinate($data['current_subdistric'], $data['current_subdistric'], $data['current_regency']);
        $documents = $this->handleMemberDocuments($request, $data);

        $data['latitude'] = $response['latitude'];
        $data['longitude'] = $response['longitude'];

        DB::transaction(function () use ($data, $documents) {
            $member = User::create($data);

            $data['user_id'] = $member->id;

            MemberDetail::create($data);

            MemberAddress::create($data);

            foreach ($documents as $key => $value) {
                Document::create([
                    'user_id' => $member->id,
                    'name' => $key,
                    'path' => $value
                ]);
            }
        });

        return redirect()->back()->with('success', 'Data Berhasil Terkirim!');
    }

    private function validateData($data, $type)
    {
        $keysToCheck = ['administrative_cost', 'principal_saving', 'mandatory_saving', 'special_mandatory_saving'];

        foreach ($keysToCheck as $key) {
            if ($data[$key] != $type->$key) {
                return false;
            }
        }

        return true;
    }

    private function getCoordinate($subdistric, $disctric, $regency)
    {
        $location = urlencode('Desa ' . $subdistric . ', Kecamatan ' . $disctric . ', ' . $regency);
        $apiKey = 'jh4UjC99DhtUf5qB3UntPehW9zsLrgUuRShNaNs906k';

        $response = Http::get("https://geocode.search.hereapi.com/v1/geocode?q={$location}&apiKey={$apiKey}");

        $data = $response->json();

        $latitude = 0;
        $longitude = 0;

        if (isset($data['items'][0]['position'])) {
            $position = $data['items'][0]['position'];
            $latitude = $position['lat'];
            $longitude = $position['lng'];
        }

        return ['latitude' => $latitude, 'longitude' => $longitude];
    }

    private function handleMemberDocuments($request, $data)
    {
        if ($request->hasFile('photos')) {
            $documents = $request->file('photos');
            $data['documents'] = [];

            foreach ($documents as $key => $document) {
                $filename = 'document-' . trim($key, "'") . '.' . $document->extension();
                $path = $this->uploadMemberDocument($document, $filename, $data);
                $data['documents'][trim($key, "'")] = Storage::url($path);
            }
        }

        return $data['documents'];
    }

    private function uploadMemberDocument($document, $filename, $data)
    {
        return Storage::putFileAs(
            '/public/upload/members/member-' . $data['remember_token'] . '/documents',
            $document,
            $filename
        );
    }
}
