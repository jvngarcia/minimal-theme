@extends('layouts.general')

@section('css')
    @vite(['resources/css/posts.css'])
@endsection

@section('title', 'Incio')

@section('description', 'Accede y descubre todas la información de veterinarias y tiendas de mascotas.')
@section('keywords', 'Veterinarias en caracas, veterinarias en venezuela, tiendas de mascotas en venezuela, tiendas de mascotas en caracas')

@section('content')
    <div>
        <h2>Veterinarias</h2>


        @foreach ($veterinaries as $veterinary)
            {{ $veterinary }}
        @endforeach
    </div>

    <section class="row">
        @foreach ($posts as $post)
            <article class="col-lg-3 col-md-4 col-sm-6 py-3">
                <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-reset">
                    <div class="card mx-1">
                        <img src="{{ $post->image }}" class="card-img-top img-fluid" alt="{{ $post->name }}" />
                        <div class="card-body">
                            <a href="{{ route('blog.category', $post->categories) }}" class="card-category text-decoration-none">{{ $post->categories->name }}</a>
                            <h6 class="card-title">{{ $post->name }}</h6>
                            <div class="d-flex justify-content-between">
                                <p class="card-text card-author mb-0">{{ $post->authors->name }}</p>
                                <p class="card-text card-date">{{ date( 'M Y', strtotime($post->created_at) ) }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            </article>
        @endforeach
    </section>
@endsection
