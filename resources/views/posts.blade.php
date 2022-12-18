@extends('layouts.main')

@section('container')
    <h1 class="pb-4 text-4xl">[ HALAMAN POSTINGAN ]</h1>
    <section class="p-3 p-8 mb-4 border"">
        <div>
            <button class="px-2 py-1 mb-4 border rounded-md text-slate-200 border-slate-800 bg-slate-800">
                <a href="/blog">back to blog</a>
            </button>
            <h1 class="text-2xl font-bold ">
                {{ $blogPost->title }}
            </h1>
            <h2 class="italic ">author by: <a href="" class="text-blue-600">{{ $blogPost->user->name }}</a></h2>
            <h2 class="pb-4 italic ">Kategori: <a class="text-blue-600"
                    href="/categories/{{ $blogPost->category->slug }}">{{ $blogPost->category->name }}</a></h2>
            {!! $blogPost->body !!}
            <img class="pt-4 mx-auto" src="https://upload.wikimedia.org/wikipedia/commons/8/8c/USS_Columbia_%28SSN-771%29.jpg" alt="USS Columbia">
        </div>
    </section>
@endsection
