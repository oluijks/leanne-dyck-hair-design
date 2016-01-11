@extends('layouts.app')

@section('content')

@include('partials._jumbotron', ['header' => 'Specials'])

<div class="container">
    <div class="row">
        <div class="col-md-8">

            <ol class="breadcrumb">
                <li><b>You are here:</b>&nbsp&nbsp;<a href="/">Home</a></li>
                <li class="active">Specials</li>
            </ol>

            <h2 class="page-header">Specials</h2><br />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <hr/>


            </p>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
              <img src="/img/modern_gift_certificate_l.jpg" style="width: 100%;">
            </div>
        </div>

    </div>
</div>

@endsection
