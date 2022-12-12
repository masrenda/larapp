@extends('layouts.main')

@section('container')
    <h2>{{ $name }}</h2>
    <h3>{{ $email }}</h3>
    <img src="{{ $images }}" alt="Profile">
@endsection
