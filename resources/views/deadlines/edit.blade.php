@extends('layouts.app')

@section('title', ' Editar plazo objetivo')

@section('header', 'Editar plazo objetivo')

@section('content')

    <!-- Editar plazo objetivo -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow p-6">
            <form action="{{ route('deadlines.update', $deadline) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="deadline" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ __('Fecha Objetivo') }}
                    </label>
                    <input type="date" name="deadline" id="deadline" required
                        value="{{ $deadline->deadline }}"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
    
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                        {{ __('Descripción (opcional)') }}
                    </label>
                    <textarea name="description" id="description" rows="3"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $deadline->description }}</textarea>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ route('dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center mr-2">
                        {{ __('Cancelar') }}
                    </a>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        {{ __('Actualizar Plazo Objetivo') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
