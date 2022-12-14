@extends('layouts.main')

@section('container')
    @foreach ($blogPost as $bloges)
        <section class="pb-8">
            <h1 class="text-2xl font-bold underline">
                <a href="/posts/{{ $bloges->slug }}">{{ $bloges->title }}</a>
            </h1>
            <h2 class="italic pb-4">author by: {{ $bloges->author }}</h2>
            <p>{{ $bloges->excerpt }}</p>
        </section>
    @endforeach
@endsection
