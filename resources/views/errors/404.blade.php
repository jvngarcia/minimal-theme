@extends('layouts.general')

@section('css')
    @vite(['resources/css/posts.css'])
@endsection

@section('title', 'No se encontraron resultados')

@section('content')
    <h1>Página no encontrada</h1>
    <p>La página que buscas no existe o no se encuentra disponible</p>
@endsection
