@extends('layouts.general')

@section('css')
    @vite(['resources/css/posts.css'])
@endsection

@section('title', $post->name)

@section('content')

    <article class="entry-content">
        <section class="d-flex justify-content-center py-5">
            <section class="container-compact">
                <div class="content-compact">
                    <a href="{{ URL::previous() }}" class="text-decoration-none">Regresar</a>
                    <h1 class="mt-3">{{ $post->name }}</h1>
                    <p>{{ $post->authors->name }} | <a href="{{ route( 'blog.category', $post->categories->slug  ) }}" class="text-decoration-none text-reset">{{ $post->categories->name }}</a> | <span>{{  \Carbon\Carbon::parse($post->created_at)->format('F Y') }}</span></p>
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
                    {!! Str::markdown($post->content) !!}
                </div>
            </section>
        </section>
    </article>


@endsection
