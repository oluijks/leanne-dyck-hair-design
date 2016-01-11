@extends('layouts.app')

@section('content')

@include('partials._jumbotron', ['header' => 'Testimonials'])

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <ol class="breadcrumb">
                <li><b>You are here:</b>&nbsp&nbsp;<a href="/">Home</a></li>
                <li class="active">Testimonials</li>
            </ol>

            <p class="lead">What customers say about me</p>

            <hr/>

            <blockquote>
                <p>When it comes to brows, Leanne is one of the best!!</p>
                <footer>Susie</footer>
            </blockquote>

            <br/>

            <blockquote class="blockquote-reverse">
                <p>Leanne's the only one who I let touch my hair! :)</p>
                <footer>Anna</footer>
            </blockquote>

            <br/>

            <blockquote>
                <p>Only Person that I let cut my hair!</p>
                <footer>Terry</footer>
            </blockquote>

            <br/>

            <blockquote class="blockquote-reverse">
                <p>Leanne is Amazing!!</p>
                <footer>Susan</footer>
            </blockquote>

            <br/>

            <blockquote>
                <p>If she is booked, she worth the wait! You wont be sorry! The only lady I let cut my hair :)</p>
                <footer>Stacey</footer>
            </blockquote>

            <br/>

        </div>
    </div>
</div>
@endsection
