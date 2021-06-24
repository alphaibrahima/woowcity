@extends('base')

@section('title', 'Home | ' . env('APP_NAME'))


@section('content')
    <h1>WoooWCity Nakryka</h1>
    <p>C'est une situé entre le monde terre et nuptune et il est {{ date('h: i A') }} </p>

@endsection