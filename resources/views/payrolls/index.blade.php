@extends('layouts.app')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')

    @foreach ($payrolls as $payroll)
        <p>{{ $payroll->amount }}<p>    
    @endforeach

@endsection