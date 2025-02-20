@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-8">{{ __('My Wallet') }}</h1>
            
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Nómina -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">{{ __('Nómina') }}</h2>
            <p class="text-2xl font-bold text-green-600">{{ __('€1,390.00') }}</p>
        </div>
        
        <!-- Gastos -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">{{ __('Gastos Totales') }}</h2>
            <p class="text-2xl font-bold text-red-600">{{ __('€1,200.00') }}</p>
        </div>
        
        <!-- Entradas Extras -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">{{ __('Entradas Extras') }}</h2>
            <p class="text-2xl font-bold text-blue-600">{{ __('€200.00') }}</p>
        </div>
        
        <!-- Ahorros Actuales -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">{{ __('Ahorros Actuales') }}</h2>
            <p class="text-2xl font-bold text-purple-600">{{ __('€200.00') }}</p>
        </div>
        
        <!-- Objetivo de Ahorro -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">{{ __('Objetivo de Ahorro') }}</h2>
            <p class="text-2xl font-bold text-indigo-600">{{ __('€35,000.00') }}</p>
            <p class="text-sm text-gray-500 mt-2">{{ __('Para el 1 de enero de 2025') }}</p>
        </div>
        
        <!-- Ahorro Mensual Recomendado -->
        <div class="bg-white rounded-lg shadow p-6">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">{{ __('Ahorro Mensual Recomendado') }}</h2>
            <p class="text-2xl font-bold text-orange-600">{{ __('€800') }}</p>
        </div>
    </div>

    <!-- Gráfico de Progreso -->
    <div class="mt-12 bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold text-gray-700 mb-4">{{ __('Progreso de Ahorro') }}</h2>
        <div class="relative pt-1">
            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-gray-200">
                <div style="width:{{ (200 / 35000) * 100 }}%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"></div>
            </div>
            <div class="flex justify-between text-xs text-gray-600">
                <span>{{ __('€200') }}</span>
                <span>{{ __('€35,000') }}</span>
            </div>
        </div>
    </div>
@endsection
