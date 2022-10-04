@extends('layouts.general')

@section('css')
    @vite(['resources/css/posts.css'])
@endsection

@section('title', 'Home')

@section('content')
    
    <article class="entry-content">
        <section class="d-flex justify-content-center py-5">
            <section class="container-compact">
                <div class="content-compact">
                    <a href="{{ URL::previous() }}" class="text-decoration-none">Regresar</a>
                    <h1 class="mt-3">{{ $post->name }}</h1>
                </div>
            </section>
        </section>

        <div class="d-flex justify-content-center">
            <section class="container-compact d-flex justify-content-center">
                <img src="{{ $post->image }}" alt="{{ $post->name }}">
            </section>
        </div>

        <section class="d-flex justify-content-center py-5">
            <section class="container-compact">
                <div class="content-compact">
                    <p>{{ $post->content }}</p>
                    <h2>{{ $post->name }}</h2>
                    <p>{{ $post->content }}</p>
                    <p>{{ $post->content }}</p>
                    <h2>{{ $post->name }}</h2>
                    <p>{{ $post->content }}</p>
                </div>
            </section>
        </section>
    </article>

    
@endsection