{{-- Calling the layout --}}
@extends('layouts.landing')

@section('title')
    Services
@endsection

@section('content')
    <h1>Services</h1>
    {{-- Blade component --}}
    @component('_components.card')
        @slot('serviceTitle', 'Service 1')
        @slot('serviceContent', 'Content information')
        @slot('serviceImg', 'assets/img/city.jpg')
        @slot('imgAlt', 'City in the night')
    @endcomponent

@endsection