@extends('layouts.app')

@section('title', 'Pagos extras')

@section('header', 'Pagos extras')

@section('content')
       
<a href="{{ route('extraincomes.create') }}" class="text-blue-600 hover:text-blue-900 mr-3">{{ __('Crear ingreso extra') }}</a>

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
    
<!-- Pagos extras -->
<div class="mt-12 bg-white rounded-lg shadow p-6">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('Gestión de ingresos extras') }}</h2>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Nombre') }}</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Descripción') }}</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Monto') }}</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Acciones') }}</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($extraincomes as $extraincome)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{ $extraincome->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $extraincome->description }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ __('€')}}{{ number_format($extraincome->amount, 2) }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center">
                    <a href="{{ route('extraincomes.edit', $extraincome) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">{{ __('Editar') }}</a>
                    <form action="{{ route('extraincomes.delete', $extraincome) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="{{ route('extraincomes.delete', $extraincome) }}" class="text-red-600 hover:text-red-900" onclick="return confirm('¿Estás seguro de que deseas eliminar este ingreso extra?')">
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