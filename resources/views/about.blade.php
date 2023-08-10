@extends('layouts.main')

@section('container')
    <h1>Halman About</h1>
    <img src="img/{{ $image }}" alt="{{ $name }}">
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
@endsection