@extends('layouts.main')

@section('content')

    <h1>Halaman About</h1>
    <h2>{{ $name }}</h2>
    <h3>{{ $gmail }}</h3>
    <img class="rounded rounded-circle" width="200px" height="200px" src="img/{{ $image }}" alt="kucing">

@endsection
