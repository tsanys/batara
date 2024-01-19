<?php

namespace App\Http\Controllers\Admin;

use App\Models\Document;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DashboardMemberController extends Controller
{
    public function index()
    {
        $members = User::where('role', 'member')->select('member_type_id', 'nik', 'fullname', 'phone', 'remember_token', 'created_at')->with('type:id,name')->filters(request('search'))->paginate(10);

        return view('dashboard.pages.members.index', compact('members'));
    }

    public function show(User $member)
    {
        $member->load('detail', 'address', 'documents');

        return view('dashboard.pages.members.detail', compact('member'));
    }

    public function getDocument(Document $document)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Forbidden'], 403);
        }

        $document->load('member:id,fullname');

        $document = $document->only(['id', 'name', 'path', 'member']);

        if ($document) {
            return response()->json([
                'message' => 'Document found!',
                'document' => $document,
            ], 200);
        } else {
            return response()->json([
                'message' => 'Document found!',
                'document' => null,
            ], 200);
        }
    }

    public function downloadDocument(Document $document)
    {
        if (Storage::exists(Str::replaceFirst('/storage', 'public', $document->path))) {
            $document->load('member');
            $filename = explode('/', $document->path);
            $path = Str::replaceFirst('/storage', 'public', $document->path);
            $shownFilename = Str::slug($document->member->fullname) . '-' . end($filename);

            return Storage::download($path, $shownFilename);
        }

        abort('404', 'Dokumen Tidak Ditemukan!');
    }
}
