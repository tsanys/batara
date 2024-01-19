@extends('dashboard.layout.app')

@section('title', 'List Anggota')

@section('content')
    <div class="grid my-6 grid-cols-1 lg:grid-cols-3 gap-y-4 items-center">
        <h2 class="text-2xl col-span-2 font-semibold text-gray-700 dark:text-gray-200 truncate">
            List Anggota
        </h2>

        <form action="/dashboard/members">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" name="search" id="default-search" value="{{ request('search') }}"
                    class="block w-full p-3 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                    placeholder="Cari NIK atau Nama..." required>
                @if (request('search'))
                    <a href="/dashboard/members"
                        class="text-white absolute end-1.5 bottom-1.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:hover:bg-red-700 dark:focus:ring-red-800">X</a>
                @else
                    <button type="submit"
                        class="text-white absolute end-1.5 bottom-2 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-1.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Search</button>
                @endif
            </div>
        </form>

    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap" aria-label="members-table">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">NIK</th>
                        <th class="px-4 py-3">Nama Lengkap</th>
                        <th class="px-4 py-3">Kelompok Anggota</th>
                        <th class="px-4 py-3">No Telepon</th>
                        <th class="px-4 py-3">Bergabung Pada</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @forelse ($members as $member)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                {{ $member->nik }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $member->fullname }}
                            </td>
                            <td class="px-4 py-3 text-sm capitalize">
                                {{ $member->type->name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $member->phone }}
                            </td>
                            <td class="px-4 py-3 text-sm italic">
                                {{ \Carbon\Carbon::parse($member->created_at, 'Asia/Makassar')->translatedFormat('d F Y') }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a href="{{ route('dashborad.member.detail', $member->remember_token) }}"
                                    class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-green">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-gray-700 dark:text-gray-400 text-center">
                            <td class="px-4 py-3 text-sm" colspan="6">
                                Tidak ada data!
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div
            class="flex px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <span class="col-span-2"></span>
            <!-- Pagination -->
            {{ $members->links('dashboard.partials.pagination') }}
        </div>
    </div>
@endsection
