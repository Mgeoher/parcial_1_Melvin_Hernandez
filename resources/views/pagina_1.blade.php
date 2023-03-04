@extends('layout')

@section('title', 'Page Title')

@section('sidebar')
    <p>Este es el texto de la vista principal.</p>
@endsection

@section('content')
    <p>Este es el contenido de la vista</p>
    <a href="{{route('pagina_2')}}">Link a pagina secundaria</a>
@endsection


