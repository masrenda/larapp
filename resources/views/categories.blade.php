@extends('layouts.main')

@section('container')
    @foreach ($categories as $category)
        <section class="pb-8">
            <ul>
                <li>
                    <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
                    <h1>jksjdfljskldfjklsjdflksjdflj</h1>
                </li>
            </ul>
        </section>
    @endforeach
@endsection
