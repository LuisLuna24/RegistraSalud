<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="bg-gray-100 dark:bg-gray-900 md:px-10 md:mt-5 text-slate-950 dark:text-slate-200">
        <nav id="nav"
            class="bg-slate-300 dark:bg-slate-800 max-w-72 fixed top-0 left-0 md:top-5 md:left-10 md:right-0 md:rounded-3xl h-screen shadow-md transition-all duration-300 overflow-hidden max-md:-translate-x-full z-20 px-5 md:border-2 md:border-blue-400">
            <div class="pt-5 pb-10">
                <h1 class="text-4xl text-center font-bold text-blue-600 dark:text-blue-400">Registra Salud</h1>
            </div>
            <div class="w-full overflow-y-hidden">
                <p class="text-xl text-gray-600">{{ __('Home') }}</p>
                <ul class="flex flex-col gap-5 mt-3">
                    <li>
                        <a class="flex items-center text-xl gap-2  {{ request()->routeIs('*.panel') ? 'bg-blue-400 dark:bg-slate-600 border-2 border-blue-600 dark:border-blue-400' : 'bg-slate-200 dark:bg-slate-700' }} rounded-md px-3 py-2 hover:bg-slate-400  dark:hover:bg-slate-600 ease-in duration-150"
                            @switch(Auth::user()->id_tipo_usuario)
                        @case(1)
                        href="{{ route('admin.admin.panel') }}"
                        @break
                        @case(2)
                        href="{{ route('doctor.doctor.panel') }}"
                        @break
                        @case(3)
                        href="{{ route('psicologo.psicologo.panel') }}"
                        @break
                        @case(4)
                        href="{{ route('nutiologo.nutiologo.panel') }}"
                        @break
                        @case(5)
                        href="{{ route('paciente.paciente.panel') }}"
                        @break
                        @endswitch>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                <path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                                <path
                                    d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" />
                                <path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" />
                            </svg>
                            <p>{{ __('Dashboard') }}</p>
                        </a>
                    </li>
                </ul>
                <p class="text-xl text-gray-600 mt-5">{{ __('Registers') }}</p>
                <ul class="flex flex-col gap-5 mt-3">
                    <li>
                        <a href="{{ route('admin.control.usuarios') }}"
                            class="flex items-center text-xl gap-2  {{ request()->routeIs('admin.control.usuarios') ? 'bg-blue-400 dark:bg-slate-600 border-2 border-blue-600 dark:border-blue-400' : 'bg-slate-200 dark:bg-slate-700' }} rounded-md px-3 py-2 hover:bg-slate-400  dark:hover:bg-slate-600 ease-in duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                            <p>{{ __('Users') }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Fondo para cerrar el menú al hacer clic fuera -->
        <div id="box_shadow" class="z-10 fixed left-0 right-0 top-0 bottom-0 bg-black/50 hidden md:hidden"></div>

        <header
            class="flex items-center justify-between md:justify-end  md:ml-80 bg-slate-300 dark:bg-slate-800 md:rounded-2xl px-5 md:px-10 border-b-4 border-b-blue-400 md:border-2 md:border-blue-400">
            <button type="button" id="toggleButton" class="block md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="icon icon-tabler icons-tabler-outline icon-tabler-menu-deep">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6h16" />
                    <path d="M7 12h13" />
                    <path d="M10 18h10" />
                </svg>
            </button>
            <div class="flex items-center">
                @livewire('navigation-menu')
                {{--<button id="themeToggle" class="p-2 rounded-md bg-gray-200 dark:bg-gray-700 transition">
                    <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-sun">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                    <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-moon hidden">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </button>--}}
            </div>

        </header>

        <main class="px-5 md:ml-80 py-7 md:py-10">
            <div class="text-4xl font-bold">
                <h1>@yield('titulo')</h1>
            </div>
            <div class="mt-5 md:mt-10 w-full ">
                @yield('content')
            </div>
        </main>

        <x-notification />

        @livewireScripts
        <script src="{{ asset('js/modoColor.js') }}"></script>
        <script src="{{ asset('js/navResponsive.js') }}"></script>

    </body>

</html>
