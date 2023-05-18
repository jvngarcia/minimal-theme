@extends('layouts.general')

@section('css')
    @vite(['resources/css/posts.css'])
@endsection

@section('title', $veterinary->name)

@section('description', $veterinary->extract)
@section('keywords', $veterinary->keywords)

@section('content')

    <article class="entry-content">
        <section class="justify-content-center pt-5 d-flex">
            <div class="container-compact">
                <a href="{{ URL::previous() }}" class="text-decoration-none">Regresar</a>
            </div>
        </section>

        <section class="justify-content-center py-5 d-flex">
            <div class="container-compact">
                <div class="row w-100">
                    <div class="col-lg-3 d-flex justify-content-lg-start justify-content-center">
                        <img src="{{ $veterinary->logo }}" class="rounded-circle" alt="{{ $veterinary->name }}"
                            style="height: 150px; width: 150px;" />

                    </div>
                    <div class="col-lg-9">
                        <h1 class="mt-3 text-lg-start text-center">{{ $veterinary->name }}</h1>
                        <p class="mt-0 text-lg-start text-center"> {{ $veterinary->address->first()->country }},
                            {{ $veterinary->address->first()->city }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="justify-content-center pt-1 d-flex">
            <div class="container-compact">
                <div class="row w-100">
                    <div class="col-lg-3">
                        <h6>Contacto</h6>
                        @foreach ($veterinary->phone as $phone)
                            <p class="mt-0">{{ $phone->phone }}</p>
                        @endforeach
                    </div>
                    <div class="col-lg-3">
                        <h6>Direcciones</h6>
                        @foreach ($veterinary->address as $address)
                            <p class="mt-0">{{ $address->country }}, {{ $address->city }}</p>
                        @endforeach
                    </div>

                    <div class="col-lg-3">
                        <h6>Correo electrónico</h6>
                        <p class="mt-0">{{ $veterinary->email }}</p>
                    </div>

                    <div class="col-lg-3">
                        <h6>Sitio web</h6>
                        <p class="mt-0">{{ $veterinary->website }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-flex justify-content-center">
            <section class="container-compact">
                <h2>Descripción</h2>
                {!! Str::markdown($veterinary->description) !!}
            </section>
        </section>

        <section class="justify-content-center mt-1 d-flex">
            <div class="container-compact">
                <h2>Servicios</h2>
                <div class="row w-100">
                    @foreach ($veterinary->services as $service)
                        <article class="col-lg-3 col-md-4 col-sm-6 py-3">
                            <div class="card">
                                <div class="card-body text-center">
                                    {{-- <div class="justify-content-center d-flex mb-3">
                                        <img src="{{ $service->image }}" class="rounded-circle"
                                            alt="{{ $service->name }}" style="height: 100px; width: 100px;" />
                                    </div> --}}
                                    <h6 class="text-reset">{{ $service->name }}</h6>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

    </article>

@endsection
