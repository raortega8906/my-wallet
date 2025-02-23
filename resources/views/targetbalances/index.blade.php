@extends('layouts.app')

@section('title', 'Saldo objetivo')

@section('header', 'Saldo objetivo')

@section('content')

    <a href="{{ route('targetbalances.create') }}" class="text-green-600 hover:text-green-900 mr-3">{{ __('Crear saldo objetivo') }}</a>

    <!-- Ahorros -->
    <div class="mt-12 bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('Gestión de saldo objetivo') }}</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Tipo') }}</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Monto') }}</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Acciones') }}</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($targetbalances as $targetbalance)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ __('Saldo objetivo') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ __('€')}}{{ number_format($targetbalance->target_balance, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center">
                        <a href="{{ route('targetbalances.edit', $targetbalance) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">{{ __('Editar') }}</a>
                        <form action="{{ route('targetbalances.delete', $targetbalance) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="alert('Saldo objetivo eliminado')">
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