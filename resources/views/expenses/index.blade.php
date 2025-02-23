@extends('layouts.app')

@section('title', 'Gastos')

@section('header', 'Gastos')

@section('content')

    <a href="{{ route('expenses.create') }}" class="text-green-600 hover:text-green-900 mr-3">{{ __('Crear gasto') }}</a>
    
    <!-- Gastos -->
    <div class="mt-12 bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('Gestión de gastos') }}</h2>
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
                @foreach ($expenses as $expense)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $expense->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $expense->description }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ __('€')}}{{ number_format($expense->amount, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center">
                        <a href="{{ route('expenses.edit', $expense) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">{{ __('Editar') }}</a>
                        <form action="{{ route('expenses.delete', $expenses) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button href="{{ route('expenses.delete', $expense) }}" class="text-red-600 hover:text-red-900">
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