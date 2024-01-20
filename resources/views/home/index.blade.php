@extends('home.layout.app')

@section('title', 'Batara Cooperative')

@section('content')
    <section
        class="overflow-hidden relative md:-mt-20 flex items-center justify-center h-screen bg-center bg-no-repeat bg-cover bg-hero-image z-0">
        <div class="z-10 max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-12">
            <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">
                Batara Cooperative
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-200 lg:text-xl sm:px-16 xl:px-48">
                Koperasi Multi Pihak Bahtera Sejahtera Nusantara
            </p>
            <div class="flex flex-col mb-8 space-y-4 lg:mb-16 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/register"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Daftar Sekarang
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
        <div class="absolute top-0 inset-0 bg-wave-pattern z-1 opacity-20">
        </div>
        <div class="absolute inset-0 bg-black bg-opacity-70 z-5"></div>
        <svg class="absolute z-40 -bottom-1 lg:-bottom-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,32L48,74.7C96,117,192,203,288,218.7C384,235,480,181,576,165.3C672,149,768,171,864,160C960,149,1056,107,1152,96C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
        <svg class="absolute z-50 lg:-bottom-14 bottom-1 opacity-80 rotate-3 -left-3" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,32L48,74.7C96,117,192,203,288,218.7C384,235,480,181,576,165.3C672,149,768,171,864,160C960,149,1056,107,1152,96C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>

    <section class="bg-white" id="tentang">
        <div
            class="flex flex-col items-center max-w-screen-xl gap-8 px-4 py-8 mx-auto md:flex-row xl:gap-16 sm:py-16 lg:px-6">
            <img class="w-40 md:w-52" src="/assets/home/images/batara-logo.png" alt="dashboard image">
            <div class="mt-4 md:mt-0">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                    Tentang Batara
                </h2>
                <p class="mb-6 text-justify font-light text-gray-500 md:text-lg dark:text-gray-400">

                    Balai Latihan Kerja Kabupaten Tanah Bumbu menginisiasi sebuah program untuk mendukung para alumni
                    pelatihan kerja agar dapat mengaplikasikan kemampuan dan keterampilan yang dimiliki guna meningkatkan
                    kesejahteraan dan mendukung pembangunan. Mereka mengadopsi Model Koperasi Multi Pihak, yang menempatkan
                    modal sosial sebagai landasan untuk kegiatan ekonomi, sesuai dengan beragam keterampilan komunitas
                    alumni. Dengan melibatkan berbagai pihak, koperasi 'Bahtera Sejahtera Nusantara' bertujuan membangun
                    kewirausahaan sebagai alternatif penyediaan barang, jasa, dan lapangan kerja lokal, serta menjadi
                    gerakan solidaritas yang mendorong transformasi bisnis. Semua diundang untuk bergabung dan menjadi
                    bagian dari gerakan ini.
                </p>
                <a href="/register"
                    class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Jadi Anggota
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-green-100">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <h2 class="mb-8 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                VISI, MISI dan VALUE
            </h2>
            <div class="grid pt-8 text-left border-t border-gray-200 md:gap-16 dark:border-gray-700 md:grid-cols-3">
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            VISI
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">
                            Menjadi Koperasi Multi Pihak Terbaik di Indonesia
                        </p>
                    </div>
                </div>
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            MISI
                        </h3>
                        <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                            <li>
                                Membangun ekosistem industri berkelanjutan bagi produktifitas anggota
                            </li>
                            <li>
                                Memiliki daya saing sebagai mitra strategis dan terpercaya bagi anggota
                            </li>
                            <li>
                                Mengelola koperasi dan unit usaha secara professional dengan
                                prinsif good cooperative governance
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="mb-10">
                        <h3 class="flex items-center mb-4 text-lg font-medium text-gray-900 dark:text-white">
                            <svg class="flex-shrink-0 w-5 h-5 mr-2 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            VALUE
                        </h3>
                        <p class="text-gray-500 dark:text-gray-400">
                            Amanah dan Berkah
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <div class="max-w-screen-md mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                    UNIT USAHA
                </h2>
                <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                    Unit usaha Batara koperasi memberikan layanan dan produk berkualitas, meningkatkan kesejahteraan
                    anggota, serta memberikan kontribusi positif pada masyarakat sekitar.
                </p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <div class="flex items-center justify-center mb-4 rounded-lg bg-primary-100">
                        <img src="/assets/home/images/unit-1.jpg" loading="lazy" class="w-full rounded-lg" alt="Unit">
                    </div>
                    <h3 class="mb-3 text-xl font-bold dark:text-white">
                        Rumah Jahit Batara
                    </h3>
                    <div class="flex flex-col gap-1">
                        <div class="flex items-end gap-2">
                            <div>
                                <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path
                                            d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                    </g>
                                </svg>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Jl. H.M Amin, Manurung - Pagatan
                            </p>
                        </div>
                        <div class="flex items-end gap-2">
                            <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path
                                        d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                </g>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400">
                                H.M Badri, Pasar Baru - Pagatan
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-center mb-4 rounded-lg bg-primary-100">
                        <img src="/assets/home/images/unit-4.jpg" loading="lazy" class="w-full rounded-lg"
                            alt="Unit">
                    </div>
                    <h3 class="mb-3 text-xl font-bold dark:text-white">
                        Batara Food and Beverage
                    </h3>
                    <div class="flex flex-col gap-1">
                        <div class="flex items-end gap-2">
                            <div>
                                <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path
                                            d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                    </g>
                                </svg>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Stand UMKM Pantai Pagatan
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-center mb-4 rounded-lg bg-primary-100">
                        <img src="/assets/home/images/unit-3.jpg" loading="lazy" class="w-full rounded-lg"
                            alt="Unit">
                    </div>
                    <h3 class="mb-3 text-xl font-bold dark:text-white">
                        Batara Motor
                    </h3>
                    <div class="flex flex-col gap-1">
                        <div class="flex items-end gap-2">
                            <div>
                                <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path
                                            d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                    </g>
                                </svg>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Dharmapraja - Batulicin
                            </p>
                        </div>
                        <div class="flex items-end gap-2">
                            <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    <path
                                        d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                </g>
                            </svg>
                            <p class="text-gray-500 dark:text-gray-400">
                                Hasan Basri - Pagatan
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-center mb-4 rounded-lg bg-primary-100">
                        <img src="/assets/home/images/unit-5.jpg" loading="lazy" class="w-full rounded-lg"
                            alt="Unit">
                    </div>
                    <h3 class="mb-3 text-xl font-bold dark:text-white">
                        Batara Training
                    </h3>
                    <div class="flex flex-col gap-1">
                        <div class="flex items-end gap-2">
                            <div>
                                <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path
                                            d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                    </g>
                                </svg>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Jl. Melati - Batuah - Pagatan
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-center mb-4 rounded-lg bg-primary-100">
                        <img src="/assets/home/images/unit-2.jpg" loading="lazy" class="w-full rounded-lg"
                            alt="Unit">
                    </div>
                    <h3 class="mb-3 text-xl font-bold dark:text-white">
                        Batara Productions
                    </h3>
                    <div class="flex flex-col gap-1">
                        <div class="flex items-end gap-2">
                            <div>
                                <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path
                                            d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                    </g>
                                </svg>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Jl. Melati - Batuah - Pagatan
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex items-center justify-center mb-4 rounded-lg bg-primary-100">
                        <img src="/assets/home/images/unit-6.jpg" loading="lazy" class="w-full rounded-lg"
                            alt="Unit">
                    </div>
                    <h3 class="mb-3 text-xl font-bold dark:text-white">
                        Batara Internet
                    </h3>
                    <div class="flex flex-col gap-1">
                        <div class="flex items-end gap-2">
                            <div>
                                <svg class="w-6 h-6 text-green-700 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 21">
                                    <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                        <path d="M8 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                        <path
                                            d="M13.8 12.938h-.01a7 7 0 1 0-11.465.144h-.016l.141.17c.1.128.2.252.3.372L8 20l5.13-6.248c.193-.209.373-.429.54-.66l.13-.154Z" />
                                    </g>
                                </svg>
                            </div>
                            <p class="text-gray-500 dark:text-gray-400">
                                Jl. Melati - Batuah
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="max-w-screen-xl px-4 py-8 mx-auto sm:py-16 lg:px-6">
            <h2 class="mb-8 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">
                Berita
            </h2>
            <ul class="grid grid-cols-1 xl:grid-cols-4 gap-y-10 gap-x-6 items-start">
                @forelse ($news as $item)
                    <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                        <div class="order-1 sm:ml-6 xl:ml-0">
                            <h3 class="mb-1 font-bold text-lg dark:text-gray-100 text-gray-900 truncate">
                                {{ $item->title }}
                            </h3>
                            <div class="prose prose-gray prose-sm text-gray-600 dark:text-gray-400 dark:prose-dark">
                                <p>
                                    {{ $item->description }}
                                </p>
                            </div>
                            <div class="flex gap-2 my-4">
                                <p
                                    class="prose text-sm italic truncate prose-gray prose-sm text-gray-600 dark:text-gray-400 dark:prose-dark">
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                </p>
                            </div>
                            <div class="flex gap-2 items-center">
                                <a class="group inline-flex items-center rounded-full text-sm font-semibold whitespace-nowrap py-2 focus:outline-none focus:ring-2 text-gray-700 underline hover:text-gray-900 focus:ring-gray-500 dark:text-gray-100 dark:hover: dark:hover:text-white dark:focus:ring-gray-500"
                                    href="/news/{{ $item->slug }}">
                                    Lihat Selengkapnya
                                </a>
                            </div>
                        </div>
                        <img src="{{ $item->image ? $item->image : 'https://i.ibb.co/2czfDhs/no-image.webp' }}"
                            alt="news image"
                            class="mb-6 min-w-64 max-h-48 object-cover shadow-md rounded-lg bg-gray-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                            loading="lazy">
                    </li>
                @empty
                    <div class="min-h-32 text-gray-600 dark:text-gray-400 dark:prose-dark">
                        <p>
                            Belum Ada Berita
                        </p>
                    </div>
                @endforelse
            </ul>
            <div class="flex items-center justify-center mt-6">
                <a class="group inline-flex items-center rounded-full text-sm font-semibold whitespace-nowrap px-5 py-2 focus:outline-none focus:ring-2 bg-green-100 text-green-700 hover:bg-green-200 hover:text-green-900 focus:ring-green-500 dark:bg-green-700 dark:text-green-100 dark:hover:bg-green-600 dark:hover:text-white dark:focus:ring-green-500"
                    href="/news">
                    Semua Berita
                </a>
            </div>
        </div>
    </section>
@endsection
