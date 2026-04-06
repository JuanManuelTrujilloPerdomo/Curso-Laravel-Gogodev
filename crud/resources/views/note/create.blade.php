@extends('layouts.app')

@section('content')
    <a href="{{ route('note-index') }}">Back</a>
    <form action="">
        <label for="">Title</label>
        <input type="text" name="" id="" />

        <label for="">Description</label>
        <input type="text" />

        <input type="submit" value="Create" />
    </form>
@endsection
