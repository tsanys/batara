@extends('home.layout.app')

@section('title', 'Berita - Batara Cooperative')

@section('content')
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
                                    {{ $item->author->fullname }}
                                    -
                                </p>
                                <p
                                    class="prose text-sm italic truncate prose-gray prose-sm text-gray-600 dark:text-gray-400 dark:prose-dark">
                                    {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}
                                </p>
                            </div>
                            <div class="flex gap-2 items-center">
                                <a class="group inline-flex items-center rounded-full text-sm font-semibold whitespace-nowrap px-5 py-2 focus:outline-none focus:ring-2 bg-green-100 text-green-700 hover:bg-green-200 hover:text-green-900 focus:ring-green-500 dark:bg-green-700 dark:text-green-100 dark:hover:bg-green-600 dark:hover:text-white dark:focus:ring-green-500"
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
                    <div class="min-h-screen text-gray-600 dark:text-gray-400 dark:prose-dark">
                        <p>
                            Belum Ada Berita
                        </p>
                    </div>
                @endforelse
            </ul>
        </div>
    </section>
@endsection
