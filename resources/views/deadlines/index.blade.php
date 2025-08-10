@extends('layouts.app')

@section('title', 'Plazo objetivo')

@section('header', 'Plazo objetivo')

@section('content')

    <a href="{{ route('deadlines.create') }}" class="text-blue-600 hover:text-blue-900 mr-3">{{ __('Crear plazo objetivo') }}</a>

    {{-- Mensaje de éxito --}}
    @if (session('success'))
        <div class="mt-4 text-sm text-green-600 p-2 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    {{-- Mensaje de error --}}
    @if (session('error'))
        <div class="mt-4 text-sm text-red-600 p-2 border border-red-300 rounded-lg">
            {{ session('error') }}
        </div>
    @endif

    <!-- Fecha objetivo -->
    <div class="mt-12 bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('Gestión de plazo objetivo') }}</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Tipo') }}</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Fecha') }}</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Acciones') }}</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($deadlines as $deadline)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ __('Fecha objetivo') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $deadline->deadline }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center">
                        <a href="{{ route('deadlines.edit', $deadline) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">{{ __('Editar') }}</a>
                        <form action="{{ route('deadlines.delete', $deadline) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro de que deseas eliminar este plazo objetivo?')">
                                {{ __('Eliminar') }}
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection