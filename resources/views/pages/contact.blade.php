@extends('layouts.app')

@section('content')

@include('partials._jumbotron', ['header' => 'Contact Me'])

<div class="container">
    <div class="row">

        <div class="col-md-12">

            <ol class="breadcrumb">
                <li><b>You are here:</b>&nbsp&nbsp;<a href="/">Home</a></li>
                <li class="active">Contact</li>
            </ol>

            <div id="map-outer" class="col-md-12">
                <div id="address" class="col-md-3">
                    <h2>Our Location</h2>
                    <address>
                    <strong>Leanne Dyck Hair Design</strong><br>
                    #21085 Rd 14N<br>
                    Winkler / MB<br>
                    Canada<br>
                    <abbr>P:</abbr> +1 204-325-0094
                    </address>
                </div>
                <div id="map-container" class="col-md-9"></div>
            </div>
        </div> <!-- /row -->

        {{--
        <div class="row">
            <form class="form-horizontal" name="commentform">
                <div class="form-group">
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
                    </div>
                    <div class="col-md-4">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" value="Submit" class="btn btn-primary btn-lg btn-block">Send</button>
                    </div>
                </div>
            </form>
        </div>
        --}}
    </div>
</div>

@endsection

