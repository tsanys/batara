@extends('dashboard.layout.app')

@section('title', 'Profil Anggota - ' . $member->fullname)

@section('content')
    <h2 class="flex items-center gap-3 my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        <a href="/dashboard/members">
            <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 8 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13" />
            </svg>
        </a>
        Profil {{ $member->fullname }}
    </h2>

    <div class="grid grid-cols-1 gap-4 mb-8 lg:grid-cols-3">
        <div class="grid gap-4 h-fit">
            <div
                class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow h-fit break-inside-avoid dark:bg-gray-800 dark:border-gray-700">
                <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                    General
                </h5>
                <div class="mt-2 mb-4 border border-gray-300 dark:border-gray-600"></div>
                <div class="grid grid-cols-1 gap-2">
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            NIK
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            {{ $member->nik }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Nama Lengkap
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            {{ $member->fullname }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Nama Panggilan
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            {{ $member->nickname }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            No Telepon
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            {{ $member->phone }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Bergabung Pada
                        </h5>
                        <p class="font-normal text-gray-700 dark:text-gray-400">
                            {{ \Carbon\Carbon::parse($member->created_at, 'Asia/Makassar')->translatedFormat('d F Y') }}
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow h-fit break-inside-avoid dark:bg-gray-800 dark:border-gray-700">
                <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                    Dokumen
                </h5>
                <div class="mt-2 mb-4 border border-gray-300 dark:border-gray-600"></div>
                <div class="grid grid-cols-1 gap-2">
                    @forelse ($member->documents as $document)
                        <div>
                            <h5 class="mb-2 font-bold tracking-tight text-gray-900 capitalize text-md dark:text-white">
                                {{ $document->name }}
                            </h5>
                            <button @click="openModal" value="{{ $document->id }}"
                                class="flex items-center w-full gap-2 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-lg document-button active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                                @php
                                    $filename = explode('/', $document->path);
                                @endphp

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                                </svg>

                                {{ end($filename) }}
                            </button>
                        </div>
                    @empty
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            Tidak ada
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="grid gap-4 h-fit lg:col-span-2">
            <div
                class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow h-fit break-inside-avoid dark:bg-gray-800 dark:border-gray-700">
                <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                    Detail
                </h5>
                <div class="mt-2 mb-4 border border-gray-300 dark:border-gray-600"></div>
                <div class="grid grid-cols-2 gap-2">
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Jenis Kelamin
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->gender }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Agama
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->religion }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Tempat Lahir
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->place_of_birth }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Tanggal Lahir
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->date_of_birth }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Pendidikan
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->education }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Kompetensi
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->competence }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Status Pernikahan
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->married_status }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Status NPWP
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->npwp_status }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Status Kepemilikan Rumah
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->home_ownership_status }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Administrasi
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->administrative_cost }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Simpanan Pokok
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->principal_saving }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Simpanan Wajib
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->mandatory_saving }}
                        </p>
                    </div>
                    <div>
                        <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                            Simpanan Wajib Khusus
                        </h5>
                        <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                            {{ $member->detail->special_mandatory_saving }}
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="max-w-full p-6 bg-white border border-gray-200 rounded-lg shadow h-fit break-inside-avoid dark:bg-gray-800 dark:border-gray-700">
                <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                    Alamat
                </h5>
                <div class="mt-2 mb-4 border border-gray-300 dark:border-gray-600"></div>
                <div class="grid grid-cols-2 gap-2">
                    <div class="grid gap-2">
                        <div>
                            <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                                Alamat Sesuai KTP
                            </h5>
                            <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                                {{ $member->address->ktp_address }}
                            </p>
                        </div>
                        <div>
                            <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                                Kabupaten Sesuai KTP
                            </h5>
                            <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                                {{ $member->address->ktp_regency }}
                            </p>
                        </div>
                        <div>
                            <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                                Kecamatan Sesuai KTP
                            </h5>
                            <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                                {{ $member->address->ktp_distric }}
                            </p>
                        </div>
                        <div>
                            <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                                Kelurahan Sesuai KTP
                            </h5>
                            <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                                {{ $member->address->ktp_subdistric }}
                            </p>
                        </div>
                    </div>
                    <div class="grid gap-2">
                        <div>
                            <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                                Alamat Saat Ini
                            </h5>
                            <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                                {{ $member->address->current_address }}
                            </p>
                        </div>
                        <div>
                            <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                                Kabupaten Saat Ini
                            </h5>
                            <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                                {{ $member->address->current_regency }}
                            </p>
                        </div>
                        <div>
                            <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                                Kecamatan Saat Ini
                            </h5>
                            <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                                {{ $member->address->current_distric }}
                            </p>
                        </div>
                        <div>
                            <h5 class="font-bold tracking-tight text-gray-900 text-md dark:text-white">
                                Kelurahan Saat Ini
                            </h5>
                            <p class="font-normal text-gray-700 capitalize dark:text-gray-400">
                                {{ $member->address->current_subdistric }}
                            </p>
                        </div>
                    </div>
                </div>
                <div id="map" class="z-10 w-full mt-8 rounded-lg h-52"></div>
            </div>
        </div>
    </div>

    @include('dashboard.pages.members.document-modal')

    @push('custom.js')
        <script>
            const map = L.map('map', {
                center: [{{ $member->address->latitude }}, {{ $member->address->longitude }}],
                zoom: 15
            });

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap'
            }).addTo(map);

            const redIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                iconSize: [15, 21],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            L.marker([{{ $member->address->latitude }}, {{ $member->address->longitude }}], {
                icon: redIcon
            }).addTo(map)
        </script>
    @endpush
@endsection
