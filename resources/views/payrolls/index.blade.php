@extends('layouts.app')

@section('title', 'Nómina')

@section('header', 'Nómina')

@section('content')

    <a href="{{ route('payrolls.create') }}" class="text-green-600 hover:text-green-900 mr-3">{{ __('Crear Nómina') }}</a>

    <!-- Nómina -->
    <div class="mt-12 bg-white rounded-lg shadow p-6">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">{{ __('Gestión de nómina') }}</h2>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Tipo') }}</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Monto') }}</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">{{ __('Acciones') }}</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($payrolls as $payroll)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ __('Nómina') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ number_format($payroll->amount, 2) }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center">
                        <a href="{{ route('payrolls.edit', $payroll) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">{{ __('Editar') }}</a>
                        <form action="{{ route('payrolls.delete', $payroll) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="alert('Nómina eliminada')">
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