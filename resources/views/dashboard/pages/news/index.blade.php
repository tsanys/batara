@extends('dashboard.layout.app')

@section('title', 'List Berita')

@section('content')

    <div class="mt-6">
        @include('components.message')
    </div>

    <div class="grid my-6 grid-cols-1 lg:grid-cols-3 gap-y-4 items-center">
        <div class="flex gap-3 items-center col-span-2">
            <h2 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 truncate">
                List Berita
            </h2>
            <button data-modal-target="createNewsModal" data-modal-toggle="createNewsModal"
                class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                type="button">
                Tambah Berita
            </button>

        </div>

        <form action="/dashboard/news">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" name="search" id="default-search" value="{{ request('search') }}"
                    class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="Cari Judul Berita..." required>
                @if (request('search'))
                    <a href="/dashboard/news"
                        class="text-white absolute end-1.5 bottom-1.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:hover:bg-red-700 dark:focus:ring-red-800">X</a>
                @else
                    <button type="submit"
                        class="text-white absolute end-1.5 bottom-2 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
                @endif
            </div>
        </form>

    </div>

    <ul class="grid grid-cols-1 xl:grid-cols-3 gap-y-10 gap-x-6 items-start">
        @forelse ($news as $item)
            <li class="relative flex flex-col sm:flex-row xl:flex-col items-start">
                <div class="order-1 sm:ml-6 xl:ml-0">
                    @if ($item->is_published)
                        <span
                            class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">
                            Published
                        </span>
                    @else
                        <span
                            class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">
                            Unpublished
                        </span>
                    @endif
                    <h3 class="my-2 font-bold text-lg dark:text-gray-100 text-gray-900">
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
                        <a class="group inline-flex items-center rounded-full text-sm font-semibold whitespace-nowrap px-5 py-2 focus:outline-none focus:ring-2 bg-gray-100 text-gray-700 hover:bg-gray-200 hover:text-gray-900 focus:ring-gray-500 dark:bg-gray-700 dark:text-gray-100 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-500"
                            href="{{ route('news.show', $item->slug) }}">
                            Detail
                        </a>
                        <button value="{{ $item->slug }}" data-modal-target="updateNewsModal"
                            data-modal-toggle="updateNewsModal"
                            class="edit-button text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Edit
                        </button>
                        <form action="{{ route('news.destroy', $item->slug) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                <img src="{{ $item->image ? $item->image : 'https://i.ibb.co/2czfDhs/no-image.webp' }}" alt="news image"
                    class="mb-6 min-w-64 max-h-40 md:max-h-48 object-cover shadow-md rounded-lg bg-gray-50 w-full sm:w-[17rem] sm:mb-0 xl:mb-6 xl:w-full"
                    loading="lazy">
            </li>
        @empty
            <div class="prose prose-gray prose-sm text-gray-600 dark:text-gray-400 dark:prose-dark">
                <p>
                    Belum Ada Berita
                </p>
            </div>
        @endforelse
    </ul>

    <div class="my-6">
        {{ $news->links('dashboard.partials.pagination') }}
    </div>

    @include('dashboard.pages.news.modal')
@endsection
