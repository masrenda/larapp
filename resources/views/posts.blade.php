@extends('layouts.main')

@section('container')
    <h1 class="text-2xl font-bold underline">
        {{ $blogPost->title }}
    </h1>
    <h2 class="pb-4 italic">author by: {{ $blogPost->author }}</h2>
    <h2 class="pb-4 italic">Categori: <a href="/categories/{{ $blogPost->category->slug }}">{{ $blogPost->category->name }}</a></h2>
    {!! $blogPost->body !!}
@endsection
