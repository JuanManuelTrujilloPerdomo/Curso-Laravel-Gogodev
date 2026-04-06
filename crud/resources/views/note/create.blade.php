@extends('layouts.app')

@section('content')
    <a href="{{ route('note-index') }}">Back</a>
    <form method="POST" action="{{ route('note-store') }}">
        {{-- Crea un token o identificación para este formulario y evitar ataques maliciosos --}}
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" />

        <label for="">Description</label>
        <input type="text" name="description" />

        <input type="submit" value="Create" />
    </form>
@endsection
