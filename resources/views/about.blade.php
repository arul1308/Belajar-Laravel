@extends('layout.main')

@section('container')
    <h1> Ini Halaman About </h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }} </p>
    <img src="img/{{ $img }}" alt="{{ $nama }}" width="200" class="img-thumbnail rounded-circle" >
@endsection