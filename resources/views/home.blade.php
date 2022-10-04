@extends('layouts.general')

@section('css')
    @vite(['resources/css/posts.css'])
@endsection

@section('title', 'Home')

@section('content')
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-lg-3 col-md-4 col-sm-6 py-3">
                <div class="card mx-1">
                    <img src="{{ $post->image }}" class="card-img-top img-fluid" alt="{{ $post->name }}" />
                    <div class="card-body">
                        <span class="card-category">{{ $post->category }}</span>
                        <h6 class="card-title">{{ $post->name }}</h6>
                        <div class="d-flex justify-content-between">
                            <p class="card-text card-author mb-0">Angel Garcia</p>
                            <p class="card-text card-date">{{ date( 'M Y', strtotime($post->created_at) ) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection