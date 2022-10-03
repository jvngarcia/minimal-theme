@extends('layouts.general')

@section('css')
    @vite(['resources/css/posts.css'])
@endsection

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 py-3">
            <div class="card mx-1">
                <img src="https://unavatar.io/kikobeats" class="card-img-top img-fluid" alt="title" />
                <div class="card-body">
                    <span class="card-category">CATEGORIA</span>
                    <h6 class="card-title">{title}</h6>
                    <div class="d-flex justify-content-between">
                        <p class="card-text card-author mb-0">{ user }</p>
                        <p class="card-text card-date">{ date }</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection