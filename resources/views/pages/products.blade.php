@extends('layouts.app')

@section('content')

@include('partials._jumbotron', ['header' => 'Products'])


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><b>You are here:</b>&nbsp&nbsp;<a href="/">Home</a></li>
                <li class="active">Products</li>
            </ol>
            <p class="lead">We have taken great care in selecting the products that we sell on our shelves and use on
            your hair when you come in for an appointment. Bla bla bla bla bla...</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="page-header">AVEDA HAIR AND SKIN CARE</h2>
            <p>our mission at aveda is to care for the world we live in, from the products we make to the ways in which
            we give back to society. at aveda, we strive to set an example for environmental leadership and and
            responsibility, not just in the world of beauty, but around the world.</p>
            <br>
            <h2 class="page-header">KEVIN MURPHY HAIR CARE</h2>
            <p>Unsatisfied with the performance of mainstream hair products, Kevin recognized the need for weightless
            products that provided performance, strength and longevity to support today’s ever changing looks.</p>
            <p>Born from the same philosophy as skin care and inspired by nature’s best, the KEVIN.MURPHY range of
            shampoos, conditioners, treatments and styling aids, is an indulgence of runway looks and natural
            aromatherapy catered for every hair type.</p>
            <p>The products are made from renewable and sustainable resources whenever possible, using pure essential
            oils, plant extracts and natural antioxidants. All KEVIN.MURPHY hair products are sulphate and paraben free.
            </p>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Hair Products</h3></div>
                <ul class="list-group">
                    <li class="list-group-item">Shampoo <span class="badge">$28</span></li>
                    <li class="list-group-item">Other stuff <span class="badge">$19</span></li>
                </ul>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Other Products</h3></div>
                <ul class="list-group">
                    <li class="list-group-item">LaFresh Oil-Free Face Cleanser <span class="badge">$0.55</span></li>
                    <li class="list-group-item">GiGi Paraffin Protectors (Plastic) <span class="badge">$6.05</span></li>
                </ul>
            </div>
            <i><small>All prices subject to applicable taxes</small></i>
        </div>
    </div>
</div>
@endsection
