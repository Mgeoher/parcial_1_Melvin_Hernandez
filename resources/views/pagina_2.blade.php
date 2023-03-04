@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>Este es el texto de la vista secundaria.</p>
@endsection

@section('content')
    <a href="{{route('pagina_1')}}">Link a pagina principal</a>

@endsection
