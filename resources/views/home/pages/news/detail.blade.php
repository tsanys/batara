@extends('home.layout.app')

@section('title', 'Berita ' . $news->title . ' - Batara Cooperative')

@section('content')

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article
                class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex justify-between items-center mb-6 not-italic">
                        <a class="group inline-flex items-center rounded-full text-sm font-semibold whitespace-nowrap px-5 py-2 focus:outline-none focus:ring-2 bg-gray-100 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:ring-gray-500 dark:bg-gray-700 dark:text-gray-100 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500"
                            href="/news">
                            Kembali
                        </a>
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-12 h-12 rounded-full" src="https://i.ibb.co/2czfDhs/no-image.webp"
                                alt="Author">
                            <div>
                                <p rel="author" class="text-xl font-bold text-gray-900 dark:text-white truncate">
                                    {{ $news->author->fullname }}
                                </p>
                                <p class="text-base text-gray-500 dark:text-gray-400">
                                    {{ \Carbon\Carbon::parse($news->created_at)->format('M. d, Y') }}
                                </p>
                            </div>
                        </div>
                    </address>
                    <img src="{{ $news->image ? $news->image : 'https://i.ibb.co/2czfDhs/no-image.webp' }}" alt="news image"
                        class="mb-6  object-cover shadow-md rounded-lg bg-gray-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                        loading="lazy">
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $news->title }}
                    </h1>
                </header>
                {!! $news->content !!}
            </article>
        </div>
    </main>
@endsection
