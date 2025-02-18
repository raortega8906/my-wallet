<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('./favicon.ico') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('./favicon.svg') }}">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css')
    <style>
        .invert {
            filter: invert(100%);
        }
    </style>
</head>
<body class="bg-[#F5F5F5]">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            <a href="{{ url('/') }}" class="text-white flex items-center space-x-2 px-4">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet" class="invert">
                    <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                        fill="#000000" stroke="none">
                        <path d="M865 5109 c-133 -19 -319 -92 -432 -170 -26 -18 -82 -66 -124 -106
                        -165 -158 -270 -363 -299 -584 -8 -59 -10 -554 -7 -1654 3 -1724 -1 -1593 63
                        -1783 116 -347 411 -638 763 -751 180 -59 90 -56 1826 -56 1522 0 1604 1 1680
                        19 407 94 717 431 774 840 15 106 15 1686 0 1792 -34 244 -173 489 -363 641
                        -96 77 -265 162 -386 195 l-85 23 -1695 5 c-1617 5 -1698 6 -1750 24 -106 36
                        -173 77 -251 155 -294 294 -209 779 166 958 140 66 44 63 1826 63 1577 0 1618
                        0 1693 -20 112 -28 189 -73 277 -160 137 -136 179 -257 179 -521 0 -144 2
                        -159 23 -200 71 -135 254 -145 342 -20 30 42 30 43 33 202 4 183 -8 297 -45
                        413 -106 337 -368 585 -718 679 l-80 22 -1675 1 c-921 1 -1702 -2 -1735 -7z
                        m-288 -1895 c40 -19 114 -46 165 -61 l93 -27 1700 -6 c1612 -5 1703 -6 1755
                        -23 207 -69 373 -249 415 -452 22 -104 22 -1666 0 -1770 -24 -113 -77 -208
                        -164 -295 -88 -87 -165 -132 -277 -160 -75 -19 -116 -20 -1605 -20 -1655 0
                        -1594 -2 -1744 55 -204 77 -383 256 -460 460 -56 147 -55 127 -55 1310 l0
                        1094 53 -36 c28 -20 84 -51 124 -69z"/>
                        <path d="M3987 1994 c-93 -29 -167 -134 -167 -239 0 -129 121 -245 255 -245
                        56 0 127 31 170 75 98 98 98 252 0 350 -69 69 -158 89 -258 59z"/>
                        <path d="M930 4307 c-50 -16 -104 -75 -119 -130 -25 -89 9 -181 86 -228 l38
                        -24 1614 -3 1614 -2 44 21 c121 58 148 224 53 319 -19 19 -54 41 -76 48 -56
                        16 -3201 16 -3254 -1z"/>
                    </g>
                </svg>
                <span class="text-2xl font-extrabold">{{ __('My Wallet') }}</span>
            </a>
            
            <nav>
                <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-100 hover:text-gray-800">
                    {{ __('Dashboard') }}
                </a>
                <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-100 hover:text-gray-800">
                    {{ __('Nómina') }}
                </a>
                <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-100 hover:text-gray-800">
                    {{ __('Ahorros') }}
                </a>
                <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-100 hover:text-gray-800">
                    {{ __('Ingreso Adicional') }}
                </a>
                <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-100 hover:text-gray-800">
                    {{ __('Saldo Objetivo') }}
                </a>
                <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-100 hover:text-gray-800">
                    {{ __('Plazo') }}
                </a>
                {{-- Definir si habrá un panel de administración --}}
                {{-- 
                @if (Auth::check() && Auth::user()->is_admin)
                    <div class="py-3 mt-6">
                        <span class="text-[25px] py-3 px-4 font-extrabold">{{ __('Panel Admin') }}</span>
                    </div>
                    <a href="" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-gray-100 hover:text-gray-800">
                        {{ __('Dashboard Admin') }}
                    </a>
                @endif --}}
            </nav>
        </div>

        <!-- Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top bar -->
            <header class="bg-[#FFFFFF] shadow-md">
                <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                    <h1 class="text-2xl font-semibold text-gray-800">@yield('header', 'Panel de Control')</h1>
                    <ul class="flex ml-auto items-center space-x-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-1xl font-semibold text-gray-800">
                            {{ __('Cerrar Sesión') }}
                        </button>
                    </form>
                </div>
            </header>

            <!-- Main content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-[#F5F5F5]">
                <div class="container mx-auto px-6 py-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
</body>
</html>
