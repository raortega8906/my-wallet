<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('./favicon.ico') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('./favicon.svg') }}">
    <title>{{ __('My Wallet') }}</title>
    @vite('resources/css/app.css')
    <style>
        .bg-primary { background-color: rgb(31 41 55 / var(--tw-text-opacity, 1)); }
        .text-primary { color: rgb(31 41 55 / var(--tw-text-opacity, 1)); }
        .hover\:text-primary-light:hover { color: #fff; }
        .invert {
            filter: invert(100%);
        }
    </style>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <header class="bg-primary text-white">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="font-bold text-xl">
                        <img src="{{ asset('./assets/images/aplicacion-wallet-pass.webp') }}" alt="{{ __('Logo') }}" class="h-8 w-auto invert">
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="https://github.com/raortega8906/my-wallet" target="_blank" rel="noopener noreferrer" class="text-white hover:text-gray-200">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm font-medium hover:text-primary-light">{{ __('Dashboard') }}</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm font-medium hover:text-primary-light">{{ __('Iniciar sesión') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm font-medium hover:text-primary-light">{{ __('Registrarse') }}</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
    </header>

    <div class="container mx-auto px-4 py-16">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ __('Bienvenido a My Wallet') }}</h1>
            <p class="text-xl text-gray-600 mb-8">{{ __('Toma el control de tus finanzas con facilidad') }}</p>
        </div>

        <div class="flex flex-wrap -mx-4 justify-center">
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ __('Seguimiento de Gastos') }}</h2>
                    <p class="text-gray-600">{{ __('Registra y categoriza tus gastos diarios para comprender mejor tus hábitos de consumo.') }}</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ __('Establecer Metas de Ahorro') }}</h2>
                    <p class="text-gray-600">{{ __('Define y sigue tus metas de ahorro con nuestra función intuitiva.') }}</p>
                </div>
            </div>
            <div class="w-full md:w-1/3 px-4 mb-8">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ __('Visualizar Progreso') }}</h2>
                    <p class="text-gray-600">{{ __('Observa tu progreso financiero con nuestros reportes fáciles de entender.') }}</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <a href="{{ route('register') }}" class="bg-primary text-white font-bold py-2 px-4 rounded-full transition duration-300">
                {{ __('Comenzar ahora') }}
            </a>
        </div>
    </div>

    <!-- Nueva sección destacando el cálculo automático de ahorros -->
    <div class="bg-white rounded-lg shadow-lg p-8 my-16 mx-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">{{ __('Calculadora de Ahorros Inteligentes') }}</h2>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-8">
                <img src="{{ asset('./assets/images/dashboard.webp') }}" alt="{{ __('Ilustración de la Calculadora de Ahorros') }}" class="rounded-lg shadow-md">
            </div>
            <div class="w-full md:w-1/2 px-4">
                <h3 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('Alcanza tus metas de ahorro') }}</h3>
                <p class="text-gray-600 mb-6">{{ __('Nuestro algoritmo inteligente calcula exactamente cuánto necesitas ahorrar mensualmente para alcanzar tus metas financieras. Simplemente ingresa tu:') }}</p>
                <ul class="list-disc list-inside text-gray-600 mb-6">
                    <li>{{ __('Ahorros actuales') }}</li>
                    <li>{{ __('Monto de la meta de ahorro') }}</li>
                    <li>{{ __('Fecha objetivo') }}</li>
                </ul>
                <p class="text-gray-600 mb-6">{{ __('My Wallet determinará automáticamente tu ahorro mensual requerido, teniendo en cuenta tu situación financiera actual y tus metas futuras.') }}</p>
                <div class="bg-gray-100 border-l-4 border-gray-500 text-gray-700 p-4 rounded" role="alert">
                    <p class="font-bold">{{ __('Ejemplo:') }}</p>
                    <p>{{ __('Meta: €35,000 para el 1 de enero de 2025') }}</p>
                    <p>{{ __('Ahorros actuales: €5,000') }}</p>
                    <p>{{ __('Ahorro mensual recomendado: €750') }}</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white mt-16">
        <div class="container mx-auto px-4 py-6">
            <p class="text-center text-white">&copy; {{ date('Y') }} {{ __('Desarrollado por') }}
                <a class="hover:underline" href="https://portfolio.wpcache.es" target="_blank">{{ __('Rafael A. Ortega') }}</a>.
            </p>
        </div>
    </footer>
</body>
</html>
