<header>
    <nav class="z-30 bg-transparent relative" aria-label="navbar">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="/assets/home/images/batara-logo-no-text.png" class="h-6 mr-3 sm:h-9" alt="Batara Logo" />
                <span class="self-center text-xl font-semibold text-green-600 whitespace-nowrap">BATARA</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex items-center flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 space-y-1 md:space-y-0 rtl:space-x-reverse md:mt-0">
                    <li class="w-full md:w-auto">
                        <a href="/"
                            class="block py-2 text-center px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Beranda
                        </a>
                    </li>
                    <li class="w-full md:w-auto">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-center md:justify-between w-full py-2 px-3 {{ Request::is('profile*') ? 'text-green-600' : 'text-gray-800' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:m-0 md:p-0 md:w-auto md:dark:hover:text-green-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            Profil
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-96 md:w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400"
                                aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/#tentang"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Tentang
                                    </a>
                                </li>
                                <li>
                                    <a href="/organization-structure"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                        Struktur Organisasi
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="w-full md:w-auto">
                        <a href="/members"
                            class="block py-2 text-center px-3 {{ Request::is('members*') ? 'text-green-600' : 'text-gray-800' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Keanggotaan
                        </a>
                    </li>
                    <li class="w-full md:w-auto">
                        <a href="/news"
                            class="block py-2 text-center px-3 {{ Request::is('news*') ? 'text-green-600' : 'text-gray-800' }} rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-green-700 md:p-0 md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
                            Berita
                        </a>
                    </li>
                    <li class="w-full md:w-auto">
                        <a href="/register"
                            class="text-white w-full text-center block bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                            Jadi Anggota
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
