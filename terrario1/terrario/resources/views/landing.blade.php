@extends('layouts.app')

@section('content')
    @include('partials._header')
    @include('partials._hero')
    @include('partials._features', ['features' => $features])
    @include('partials._testimonials', ['testimonials' => $testimonials])
    @include('partials._pricing', ['plans' => $plans])
    @include('partials._contact')
    @include('partials._footer')
@endsection
