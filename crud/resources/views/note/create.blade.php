@extends('layouts.app')

@section('content')
    <a href="{{ route('note-index') }}">Back</a>
    <form method="POST" action="{{ route('note-store') }}">
        {{-- Crea un token o identificación para este formulario y evitar ataques maliciosos --}}
        @csrf
        <label>Title</label>
        <input type="text" name="title" class="@error('title') danger @enderror" /> <br>
        {{-- Mostramos un error o alert al usuario --}}
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label>Description</label>
        <input type="text" name="description" /> <br>
        {{-- Mostramos un error o alert al usuario --}}
        @error('description')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Create" />
    </form>
@endsection
