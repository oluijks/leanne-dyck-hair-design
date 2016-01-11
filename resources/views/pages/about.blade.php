@extends('layouts.app')

@section('content')

@include('partials._jumbotron', ['header' => 'About Me'])

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <ol class="breadcrumb">
                <li><b>You are here:</b>&nbsp&nbsp;<a href="/">Home</a></li>
                <li class="active">About</li>
            </ol>

            <h2 class="page-header">Hi, I'm Leanne</h2><br />
            <p class="lead">As a fully licensed hairstylist I started my home based salon since september 2013 and I
            have build up a great supportive clientele, who I consider all more as friends rather than customers.</p>
            <p class="lead">Feel free to give me a call at <a class="phonenumber" href="tel:+12043250094">204 - 325 - 0094</a>
            if you have any questions or want to make an appointment, you're more then welcome.</p>

            <hr/>

            <p><b>For your convenience<br> </b>I am accepting credit cards for payment options, as well as cash or
            cheque. <br>Sorry, no debit cards accepted at this time.<br>

            <img src="https://www.merchantequip.com/image/?logos=v|m|a|me&height=64" alt="Merchant Equipment Store Credit Card Logos" />

            </p>
        </div>

        <div class="col-md-4">
            <div class="thumbnail with-caption">
              <img src="/img/salon-001.png" style="width: 100%;">
              <p class="text-center">My home based salon<small>&copy; Leanne Dyck Hair Design</small></p>
            </div>
        </div>

    </div>
</div>

@endsection
