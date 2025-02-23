@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
    
    <!-- Editar nómina -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('payrolls.update', $payroll) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ __('Fecha Objetivo') }}
                    </label>
                    <input type="date" name="amount" id="amount" required
                        value="{{ $payroll->amount }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('dashboard') }}" class="text-indigo-600 hover:text-indigo-900 mr-3">
                        {{ __('Cancelar') }}
                    </a>
                    {{ __('|') }} &nbsp;&nbsp;
                    <button type="submit" class="text-green-600 hover:text-green-900 mr-3">
                        {{ __('Actualizar Plazo Objetivo') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection