@extends('layouts.main')

@section('container')
    <section class="p-8 border mb-4 p-3"">
        <div>
            <h1 class="text-2xl font-bold ">
                {{ $blogPost->title }}
            </h1>
            <h2 class=" italic">author by: {{ $blogPost->author }}</h2>
            <h2 class="pb-4 text-blue-600 italic">Kategori: <a href="/categories/{{ $blogPost->category->slug }}">{{ $blogPost->category->name }}</a></h2>
            {!! $blogPost->body !!}
            <img class="mx-auto pt-4" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/USS_Columbia_%28SSN-771%29.jpg" alt="USS Columbia">
        </div>
    </section>
@endsection
