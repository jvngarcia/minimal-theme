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
                    <h6 class="card-title">Lorem ipsun dolore sit a met dor me practice loremasd asd asd asdasd asd</h6>
                    <div class="d-flex justify-content-between">
                        <p class="card-text card-author mb-0">Angel Garcia</p>
                        <p class="card-text card-date">9 May 2022</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection