@extends('front.layout.layout')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('front/css/errors.css') }}">
@endsection

@section('content')
<div class="notfound">
    <div class="notfound-404">
        <h1>404</h1>
        <div class="notfound-404-content">
            <h2>We are sorry, Page not found!</h2>
            <a href="{{ url('/contactus') }}">Contact Us</a>
        </div>
    </div>
</div>
@endsection