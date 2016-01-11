@extends('layouts.app')

@section('content')

@include('partials._jumbotron', ['header' => 'Sitemap'])

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

        <ol class="breadcrumb">
            <li><b>You are here:</b>&nbsp&nbsp;<a href="/">Home</a></li>
            <li class="active">Sitemap</li>
        </ol>

        <p class="lead">Quickly find your way thru my site.</p>

        <ul>
            <li><a href="#">Home</a></li>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Testimonials</a></li>
        </ul>
    </div>
    </div>
</div>
@endsection
