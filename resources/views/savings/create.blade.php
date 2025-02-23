@extends('layouts.app')

@section('title', ' Crear ahorros')

@section('header', 'Crear ahorros')

@section('content')

    <!-- Crear ahorros -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('savings.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="amount" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ __('Monto') }}
                    </label>
                    <input type="num" name="amount" id="amount" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('dashboard') }}" class="text-indigo-600 hover:text-indigo-900 mr-3">
                        {{ __('Cancelar') }}
                    </a>
                    {{ __('|') }} &nbsp;&nbsp;
                    <button type="submit" class="text-green-600 hover:text-green-900 mr-3">
                        {{ __(' Crear Ahorro') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection