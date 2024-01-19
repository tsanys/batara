<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <title>@yield('title')</title>

    @include('dashboard.partials.head')
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        @include('dashboard.partials.sidebar')

        <div class="flex flex-col flex-1 w-full">

            @include('dashboard.partials.header')

            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">

                    @yield('content')

                </div>
            </main>
        </div>
    </div>

    @include('dashboard.partials.script')
</body>

</html>
