@extends('layouts.app')

@section('content')

@include('partials._jumbotron', ['header' => 'Gallery'])

<div class="container">
    <div class="row">

        <div class="col-md-7">

            <ol class="breadcrumb">
                <li><b>You are here:</b>&nbsp&nbsp;<a href="/">Home</a></li>
                <li class="active">Gallery</li>
            </ol>

            <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">A good haircut and styling can make your features jump out. Therefore, listening to you and watching you is so important. What suits you makes you beautiful!</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive img-circle-dashed" style="height:365px; width:365px" alt="" src="img/hair-002.jpg">
        </div>
    </div>
    <hr>
    <div class="row featurette">
        <div class="col-md-5">
            <img class="img-responsive img-circle-dashed" style="height:365px; width:365px" alt="" src="img/men2.jpg">
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">In my salon I have all the attention and time for you. Have a question about a treatment or want a new hairstyle? Lets talk and we'll work something out.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7">
            <h2>And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">I take time and special care for all children who visit my salon. The smallest kids can also be cut on the parents or guardians lap.</p>
        </div>
        <div class="col-md-5">
            <img class="img-responsive img-circle-dashed" style="height:365px; width:365px" alt="" src="img/kids.jpg">
        </div>
    </div>
    <hr>
</div>
@endsection
