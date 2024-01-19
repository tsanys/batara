<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class MemberRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nik' => 'required',
            'fullname' => 'required',
            'nickname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'education' => 'required',
            'competence' => 'required',
            'married_status' => 'required',
            'npwp_status' => 'required',
            'ktp_address' => 'required',
            'ktp_regency' => 'required',
            'ktp_distric' => 'required',
            'ktp_subdistric' => 'required',
            'home_ownership_status' => 'required',
            'current_address' => 'required',
            'current_regency' => 'required',
            'current_distric' => 'required',
            'current_subdistric' => 'required',
            'member_type_id' => 'required',
            'administrative_cost' => 'required',
            'principal_saving' => 'required',
            'mandatory_saving' => 'required',
            'special_mandatory_saving' => 'required',
            'photos.*' => 'image|mimes:png,jpg,jpeg',
            'agreement_1' => 'required',
            'agreement_2' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'agreement_1.required' => 'Pernyataan Persetujuan Pertama Pendaftaran Wajib dicentang',
            'agreement_2.required' => 'Pernyataan Persetujuan Kedua Pendaftaran Wajib dicentang',
            'administrative_cost.required' => 'Biaya Administrasi Pendaftaran Wajib dicentang',
            'principal_saving.required' => 'Simpanan Pokok Pendaftaran Wajib dicentang',
            'mandatory_saving.required' => 'Simpanan Wajib Pendaftaran Wajib dicentang',
        ];
    }
}
