@extends('layouts.main')

@section('container')
    <h1 class="text-2xl font-bold underline">
        {{ $blogPost->title }}
    </h1>
    <h2 class="italic pb-4">author by: {{ $blogPost->author }}</h2>
    {!! $blogPost->body !!}
@endsection
