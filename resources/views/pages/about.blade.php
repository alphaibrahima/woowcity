@extends('base')

@section('title', 'About | ' . env('APP_NAME'))
 

    


@section('content')
    <p>Nous somme une entreprise de technologie &hearts; By Ibans Holding</p>
<p> <a href="{{ route('home') }}">Revenir à la page d'accueil</a> </p>
@endsection