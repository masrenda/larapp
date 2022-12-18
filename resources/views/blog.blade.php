@extends('layouts.main')

@section('container')
    <h1 class="pb-4 text-4xl">[ HALAMAN BLOG ]</h1>
    @foreach ($blogPost as $bloges)
        <section class="p-3 pb-8 mb-4 border">
            <div>
                <h1 class="text-2xl font-bold underline">
                    {{ $bloges->title }}
                </h1>
                <h2 class="italic">author by: <a href="" class="text-blue-600">{{ $bloges->user->name }}</a></h2>
                <h2 class="pb-4 italic">Kategori: <a class="text-blue-600" href="/categories/{{ $bloges->category->slug }}">{{ $bloges->category->name }}</a>
                </h2>
                <p class="pb-4">{{ $bloges->excerpt }}</p>
                <button class="px-2 py-1 border rounded-md text-slate-200 border-slate-800 bg-slate-800">
                    <a href="/posts/{{ $bloges->slug }}">read more</a>
                </button>
            </div>
        </section>
    @endforeach
@endsection
