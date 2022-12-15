@extends('layouts.main')

@section('container')
    <h1 class="text-4xl pb-4">[ HALAMAN CATEGORY ]</h1>
    @foreach ($blogPost as $bloges)
        <section class="pb-8 border mb-4 p-3"">
            <div>
                <h1 class="text-2xl font-bold underline">
                    <a href="/posts/{{ $bloges->slug }}">{{ $bloges->title }}</a>
                </h1>
                <h2 class="italic">author by: {{ $bloges->author }}</h2>
                <h2 class="pb-4 text-blue-600 italic">Kategori: {{ $bloges->category->name }}</h2>
                <p>{{ $bloges->excerpt }}</p>
            </div>
        </section>
    @endforeach
@endsection
