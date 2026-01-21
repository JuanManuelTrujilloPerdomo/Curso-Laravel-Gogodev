@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>
    {{-- Opcion 1 para implementarlo --}}
    @component('_components.card')
        @slot('title', 'Services 1')
        @slot('content', 'Lorem Ipsum')
    @endcomponent
    {{-- Opcion 2 para implementarlo --}}
    @component('_components.card')
        @slot('title', 'Services 2')
        @slot('content')
            <h3>Example</h3>
            <p>Lorem Ipsum</p>
        @endslot
    @endcomponent
    @component('_components.card')
        @slot('title', 'Services 3')
        @slot('content')
            <h3>Example</h3>
            <p>Lorem Ipsum</p>
        @endslot
    @endcomponent
    @component('_components.card')
        @slot('title', 'Services 4')
        @slot('content', 'Lorem Ipsum')
    @endcomponent
@endsection
