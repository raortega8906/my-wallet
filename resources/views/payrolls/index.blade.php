@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')

    @foreach ($payrolls as $payroll)
        {{ number_format($payroll->amount, 2) }}€  
    @endforeach

@endsection