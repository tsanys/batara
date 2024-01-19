@extends('home.layout.app')

@section('title', 'Daftar Anggota Batara')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">

            @include('components.message')

            <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Pendaftaran Anggota Koperasi Batara
            </h2>
            <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 pt-4 border-t border-gray-400 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            NIK
                        </label>
                        <input type="text" name="nik" id="nik"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan NIK" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Lengkap
                        </label>
                        <input type="text" name="fullname" id="fullname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Nama Lengkap" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nickname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Nama Panggilan
                        </label>
                        <input type="text" name="nickname" id="nickname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Nama Panggilan" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            No. Telepon/HP
                        </label>
                        <input type="text" name="phone" id="phone"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan No. Telepon/HP" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Email
                        </label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Email" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Jenis Kelamin
                        </label>
                        <select id="gender" name="gender"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="religion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Agama
                        </label>
                        <select id="religion" name="religion"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected value="islam">Islam</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Buddha</option>
                            <option value="kristen">Kristen</option>
                            <option value="protestan">Protestan</option>
                            <option value="katolik">Katolik</option>
                            <option value="konghuchu">Konghuchu</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="place_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tempat Lahir
                        </label>
                        <input type="text" name="place_of_birth" id="place_of_birth"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Nama Lengkap" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Tanggal Lahir
                        </label>
                        <input type="date" name="date_of_birth" id="date_of_birth"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Nama Lengkap" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="education" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Pendidikan
                        </label>
                        <select id="education" name="education"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected value="SD">SD</option>
                            <option selected value="SLTP">SLTP</option>
                            <option selected value="SLTA">SLTA</option>
                            <option selected value="D1-D2">D1-D2</option>
                            <option selected value="D3">D3</option>
                            <option selected value="S1">S1</option>
                            <option selected value="S2">S2</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="competence" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kompetensi
                        </label>
                        <input type="text" name="competence" id="competence"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Kompetensi" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="married_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Status Menikah
                        </label>
                        <select id="married_status" name="married_status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected value="sudah menikah">Sudah Menikah</option>
                            <option value="belum menikah">Belum Menikah</option>
                            <option value="cerai hidup">Cerai Hidup</option>
                            <option value="cerai mati">Cerai Mati</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="npwp_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            NPWP
                        </label>
                        <select id="npwp_status" name="npwp_status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected value="sudah ada">Sudah Ada</option>
                            <option value="belum ada">Belum Ada</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="ktp_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Alamat Sesuai KTP
                        </label>
                        <textarea id="ktp_address" rows="8" name="ktp_address"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Ketikkan Alamat Sesuai KTP"></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="ktp_regency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kabupaten Sesuai KTP
                        </label>
                        <input type="text" name="ktp_regency" id="ktp_regency"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Kabupaten Sesuai KTP" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="ktp_distric" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kecamatan Seusai KTP
                        </label>
                        <input type="text" name="ktp_distric" id="ktp_distric"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Kecamatan Seusai KTP" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="ktp_subdistric" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            kelurahan Seusai KTP
                        </label>
                        <input type="text" name="ktp_subdistric" id="ktp_subdistric"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan kelurahan Seusai KTP" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="home_ownership_status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Status Kepemilikan Rumah
                        </label>
                        <select id="home_ownership_status" name="home_ownership_status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected value="rumah sendiri">Rumah Sendiri</option>
                            <option value="ikut orang tua">Ikut Orang Tua</option>
                            <option value="sewa">Sewa</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="current_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Alamat Saat Ini
                        </label>
                        <textarea id="current_address" rows="8" name="current_address"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Ketikkan Alamat Saat Ini"></textarea>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="current_regency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kabupaten Saat Ini
                        </label>
                        <input type="text" name="current_regency" id="current_regency"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Kabupaten Saat Ini" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="current_distric" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kecamatan Saat Ini
                        </label>
                        <input type="text" name="current_distric" id="current_distric"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan Kecamatan Saat Ini" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="current_subdistric"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            kelurahan Saat Ini
                        </label>
                        <input type="text" name="current_subdistric" id="current_subdistric"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Masukkan kelurahan Saat Ini" required="true">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="personal_photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Foto Pribadi
                        </label>
                        <input name="photos['personal']" accept="image/jpg, image/jpeg, image/png"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="personal_photo_help" id="personal_photo" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="personal_photo_help">
                            PNG, JPG atau JPEG
                        </p>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="ktp_photo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Foto KTP
                        </label>
                        <input name="photos['ktp']" accept="image/jpg, image/jpeg, image/png"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            aria-describedby="ktp_photo_help" id="ktp_photo" type="file">
                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="ktp_photo_help">
                            PNG, JPG atau JPEG
                        </p>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="memberType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Kelompok Pihak Anggota
                        </label>
                        <select id="memberType" name="member_type_id"
                            class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach ($memberTypes as $type)
                                <option class="capitalize" selected value="{{ $type->id }}">{{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="administrative_cost"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Administrasi (Pembukuan dan Aplikasi)
                        </label>
                        <div class="flex items-center">
                            <input id="administrative_cost" name="administrative_cost" type="checkbox" value="500000"
                                class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="administrative_cost" id="administrative_cost_label"
                                class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                Rp. 500.000
                            </label>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="principal_saving"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Simpanan Pokok
                        </label>
                        <div class="flex items-center">
                            <input id="principal_saving" name="principal_saving" type="checkbox" value="1000000"
                                class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="principal_saving" id="principal_saving_label"
                                class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                Rp. 1.000.000
                            </label>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="mandatory_saving"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Simpanan Wajib
                        </label>
                        <div class="flex items-center mb-2">
                            <input id="mandatory_saving" name="mandatory_saving" type="checkbox" value="100000"
                                class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="mandatory_saving" id="mandatory_saving_label"
                                class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                Rp. 100.000
                            </label>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="special_mandatory_saving"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Simpanan Wajib Khusus
                        </label>
                        <div class="flex items-center mb-2">
                            <input id="special_mandatory_saving" name="special_mandatory_saving" type="checkbox"
                                value="100000"
                                class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="special_mandatory_saving" id="special_mandatory_saving_label"
                                class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                Rp. 100.000
                            </label>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="agreement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Dengan ini saya menyatakan bahwa:
                        </label>
                        <div class="flex items-center mb-2">
                            <input id="agreement_1" name="agreement_1" type="checkbox"
                                class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="agreement_1" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                Secara sadar mendaftarkan diri sebagai anggota Koperasi Multi Pihak Bahtera Sejahtera
                                Nusantara.
                            </label>
                        </div>
                        <div class="flex items-center mb-2">
                            <input id="agreement_2" name="agreement_2" type="checkbox"
                                class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="agreement_2" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">
                                Siap membayar simpanan pokok. simpanan wajib. administrasi (pembukuan dan aplikasi).
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" id="submitButton"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Kirim
                </button>
            </form>
        </div>
    </section>

    <script>
        const loader = `<svg aria-hidden="true" role="status" class="inline w-4 h-4 text-white me-3 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                        </svg>
                        Please Wait...`

        document.getElementById('submitButton').addEventListener('click', function() {
            this.innerHTML = loader
            this.setAttribute('disabled', '')
            this.removeAttribute('class')
            this.setAttribute('class',
                'inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-500 rounded-lg cursor-not-allowed'
            )

            window.removeEventListener('beforeunload', alertUnsavedForm)
            document.querySelector('form').submit()
        });

        function formatCurrency(amount) {
            return new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(amount);
        }

        function handleMemberTypeChange(selectedOption) {
            const administrativeCost = document.getElementById('administrative_cost');
            const principalSaving = document.getElementById('principal_saving');
            const mandatorySaving = document.getElementById('mandatory_saving');
            const specialMandatorySaving = document.getElementById('special_mandatory_saving');
            const administrativeCostLabel = document.getElementById('administrative_cost_label');
            const principalSavingLabel = document.getElementById('principal_saving_label');
            const mandatorySavingLabel = document.getElementById('mandatory_saving_label');
            const specialMandatorySavingLabel = document.getElementById('special_mandatory_saving_label');

            let endpoint = '{{ route('member.type', ':typeId') }}';
            endpoint = endpoint.replace(':typeId', selectedOption);

            administrativeCost.removeAttribute('checked')
            principalSaving.removeAttribute('checked')
            mandatorySaving.removeAttribute('checked')
            specialMandatorySaving.removeAttribute('checked')

            administrativeCostLabel.innerText = 'Please wait...';
            principalSavingLabel.innerText = 'Please wait...';
            mandatorySavingLabel.innerText = 'Please wait...';
            specialMandatorySavingLabel.innerText = 'Please wait...';

            fetch(endpoint)
                .then(response => {
                    if (response.status === 403) {
                        window.location.href = '/login';
                    }
                    return response.json();
                })
                .then(data => {
                    administrativeCostLabel.innerText = formatCurrency(data.type.administrative_cost);
                    principalSavingLabel.innerText = formatCurrency(data.type.principal_saving);
                    mandatorySavingLabel.innerText = formatCurrency(data.type.mandatory_saving);
                    specialMandatorySavingLabel.innerText = formatCurrency(data.type.special_mandatory_saving);

                    administrativeCost.value = data.type.administrative_cost
                    principalSaving.value = data.type.principal_saving
                    mandatorySaving.value = data.type.mandatory_saving
                    specialMandatorySaving.value = data.type.special_mandatory_saving

                    administrativeCost.setAttribute('checked', '')
                    principalSaving.setAttribute('checked', '')
                    mandatorySaving.setAttribute('checked', '')
                    specialMandatorySaving.setAttribute('checked', '')
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const initialSelectedOption = document.getElementById('memberType').value;

            handleMemberTypeChange(initialSelectedOption);

            document.getElementById('memberType').addEventListener('change', function(event) {
                const selectedOption = this.value;
                handleMemberTypeChange(selectedOption);
            });
        });

        const alertUnsavedForm = (e) => {
            e.preventDefault()
            return e.returnValue = "Data yang Anda sudah masukkan akan hilang, apakah Anda yakin?";
        }

        window.addEventListener('beforeunload', alertUnsavedForm);
    </script>
@endsection
