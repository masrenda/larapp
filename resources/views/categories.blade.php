@extends('layouts.main')

@section('container')
    @foreach ($categories as $category)
        <section class="pb-8">
            <ul>
                <li>
                    <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
                </li>
            </ul>

            {{-- <h1 class="text-2xl font-bold underline">
                <a href="/posts/{{ $bloges->slug }}">{{ $bloges->title }}</a>
            </h1>
            <h2 class="pb-4 italic">Categori: {{ $bloges->category->name }}</h2>

            <h2 class="pb-4 italic">author by: {{ $bloges->author }}</h2>
            <p>{{ $bloges->excerpt }}</p> --}}
        </section>
    @endforeach
@endsection
