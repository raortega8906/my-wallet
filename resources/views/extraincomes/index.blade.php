@extends('layouts.app')

@section('title', 'Pagos extras')

@section('header', 'Pagos extras')

@section('content')
       
    <!-- Pagos extras -->
    <div class="mt-12 bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('Gestión de pagos extras') }}</h2>
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
                    <td class="px-6 py-4 whitespace-nowrap">{{ number_format($extraincome->amount, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">{{ __('Editar') }}</a>
                        <a href="#" class="text-red-600 hover:text-red-900">{{ __('Eliminar') }}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection