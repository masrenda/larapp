@extends('layouts.main')

@section('container')
    <h1 class="text-4xl pb-4">[ HALAMAN BLOG ]</h1>
    @foreach ($blogPost as $bloges)
        <section class="pb-8 border mb-4 p-3">
            <div>
                <h1 class="text-2xl font-bold underline">
                    {{ $bloges->title }}
                </h1>
                <h2 class="italic">author by: {{ $bloges->author }}</h2>
                <h2 class="pb-4 text-blue-600 italic">Kategori: <a href="/categories/{{ $bloges->category->slug }}">{{ $bloges->category->name }}</a></h2>
                <p class="pb-4">{{ $bloges->excerpt }}</p>
                <button class="text-slate-200 border px-2 py-1 rounded-md border-slate-800 bg-slate-800">
                    <a href="/posts/{{ $bloges->slug }}">read more</a>
                </button>
            </div>
        </section>
    @endforeach
@endsection
