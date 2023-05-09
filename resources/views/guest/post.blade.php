@extends('layouts.general')

@section('css')
    @vite(['resources/css/posts.css'])
@endsection

@section('title', $post->name)

@section('description', $post->extract)
@section('keywords', $post->keywords)

@section('content')

    <article class="entry-content">
        <section class="d-flex justify-content-center py-5">
            <section class="container-compact">
                <div class="content-compact">
                    <a href="{{ URL::previous() }}" class="text-decoration-none">Regresar</a>
                    <h1 class="mt-3">{{ $post->name }}</h1>
                    <p>{{ $post->authors->name }} | <a href="{{ route('blog.category', $post->categories->slug) }}"
                            class="text-decoration-none text-reset">{{ $post->categories->name }}</a> |
                        <span>{{ \Carbon\Carbon::parse($post->created_at)->format('F Y') }}</span>
                    </p>
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

    <section class="mt-5">
        <h3>Publicaciones que te podrían gustar</h3>
        <div class="row">
            @foreach ($posts as $post)
                <article class="col-md-4 col-sm-6 py-3 mt-4">
                    <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-reset">
                        <div class="card mx-1">
                            <img src="{{ $post->image }}" class="card-img-top img-fluid" alt="{{ $post->name }}" />
                            <div class="card-body">
                                <a href="{{ route('blog.category', $post->categories) }}"
                                    class="card-category text-decoration-none">{{ $post->categories->name }}</a>
                                <h6 class="card-title">{{ $post->name }}</h6>
                                <div class="d-flex justify-content-between">
                                    <p class="card-text card-author mb-0">{{ $post->authors->name }}</p>
                                    <p class="card-text card-date">{{ date('M Y', strtotime($post->created_at)) }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </section>

@endsection
