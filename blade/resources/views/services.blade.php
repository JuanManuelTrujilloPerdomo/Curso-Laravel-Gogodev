@extends('layouts.landing')

@section('title', 'Services')

@section('content')
    <h1>Services</h1>
    @component('_components.card')
        @slot('title', 'Services 1')
        @slot('content')
            <h3>Example</h3>
            <p>Lorem Ipsum</p>
        @endslot

    @endslot
@endcomponent
@endcomponent
@endsection
