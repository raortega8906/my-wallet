@extends('layouts.app')

@section('title', ' Crear plazo objetivo')

@section('header', 'Crear plazo objetivo')

@section('content')

    <!-- Crear plazo objetivo -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('deadlines.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="deadline" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ __('Fecha Objetivo') }}
                    </label>
                    <input type="date" name="deadline" id="deadline" required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center mr-2">
                        {{ __('Cancelar') }}
                    </a>
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        {{ __('Crear Plazo Objetivo') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection