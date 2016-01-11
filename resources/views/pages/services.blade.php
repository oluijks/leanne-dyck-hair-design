@extends('layouts.app')

@section('content')

@include('partials._jumbotron', ['header' => '&nbsp;Services &amp; Price list'])

<div class="container">
    <div class="row">

        <div class="col-md-6">

            <ol class="breadcrumb">
                <li><b>You are here:</b>&nbsp&nbsp;<a href="/">Home</a></li>
                <li class="active">Services</li>
            </ol>

            <h2 class="page-header">HAIR CUTS, STYLES & BRIDAL</h2>
            <p>Every great hair style starts with a great consultation. Our stylists will begin your service by discussing your individual needs and personalizing an image that reflects and enhances your individual vision.</p>
            <p>After the consultation, your hair cut service includes a stress-relieving head, neck and shoulder massage followed by a luxurious shampoo. All hair cut services finish with a hair dry and style. Includes a hot towel treatment for men.</p>

            <br>

            <h2 class="page-header">HAIR COLOUR & HILITES</h2>
            <p>We are proud to exclusively offer the complete range of Aveda hair colour. Powered by plants, Aveda colour provides stunning, essentially damage free results.</p>
            <p>Customized colour. Vibrant reds, true violets, rich pastels, blondes from subtle to platinum – Aveda hair colours are like an artist’s palette offering our creative colourists unlimited creative possibilities.</p>
            <p>Colour with a conscience. Aveda colour is formulated without nitro dyes, parabens or animal derived ingredients and uses water instead of alcohol as a solvent providing us with fade resistant, naturally derived colour that is good for you and good for the environment.</p>
            <p>Colour services include consultation, colour or highlights, head spa shampoo & hair dry-off.</p>
        </div>

        <div class="col-md-6">

            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Haircuts</h3></div>
                <ul class="list-group">
                    <li class="list-group-item">Women's (depending on hair length and thickness) <span class="badge">$28</span></li>
                    <li class="list-group-item">Men's <span class="badge">$19</span></li>
                    <li class="list-group-item">Children's age 0-4 / age 5-10 <span class="badge">$15</span> <span class="badge">$10</span></li>
                </ul>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Chemical services *</h3></div>
                <ul class="list-group">
                    <li class="list-group-item">Color <span class="badge">$45</span></li>
                    <li class="list-group-item">Full head highlights <span class="badge">$60</span></li>
                    <li class="list-group-item">Partial highlights <span class="badge">$25</span></li>
                    <li class="list-group-item">Standard perm <span class="badge">$65</span></li>
                    <li class="list-group-item">Weave or Spiral wrap perm <span class="badge">$120</span></li>
                </ul>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Special occasion styles</h3></div>
                <ul class="list-group">
                    <li class="list-group-item">Short hair <span class="badge">$30</span></li>
                    <li class="list-group-item">Long hair <span class="badge">$50</span></li>
                    <li class="list-group-item">Wash and style (short hair) <span class="badge">$20</span></li>
                </ul>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Facial waxing</h3></div>
                <ul class="list-group">
                    <li class="list-group-item">Eyebrows <span class="badge">$10</span></li>
                    <li class="list-group-item">Upper lip or chin <span class="badge">$8</span></li>
                    <li class="list-group-item">Side of face <span class="badge">$10</span></li>
                </ul>
            </div>

            *<small><i>All chemical services start at listed price. Extra product needed for longer or thicker hair will be charged accordingly.</small></i><br />
             <i><small>All prices subject to applicable taxes</small></i>
             <br /><br />
        </div>
    </div>
</div>
@endsection
