@extends('layouts.app')

@section('content')

<div class="jumbotron">

    <div class="container">

        <div class="row">

        <div class="col-md-1 leanne-photo">

        <img class="img-circle img-leanne" src="img/leanne.jpg" alt="Leanne Dyck">

        </div>

        <div class="col-md-10">
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;Leanne Dyck Hair Design <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span></h1>

        </div>
        </div>

        <br />
        <p class="text-right slogun"><em><span class="mdash">&mdash;</span> Licensed Hairstylist specializing in full family hair care</em></p>

        <hr class="jt">

        <!-- <p><em>What customers say about me</em></p> -->
        <p class="text-left head-testimonials"><em>Testimonials:</em></p>

        <blockquote>
          <p>Leanne's the only one who I let touch my hair! :)</p>
          <footer style="color:#d9edf7"><cite  title="">Anna</cite></footer>
        </blockquote>
        <br />
        <div class="bg-primary">
            <p class="text-center">
               <span class="glyphicon glyphicon-phone-alt hidden-xs" aria-hidden="true"></span>
               &nbsp;&nbsp;Call me now to book your appointment<b>
               <a class="hidden-xs" style="color:#ffffff" href="tel:+12043250094">204 - 325 - 0094</a></b>
               <!--<br /><span class="glyphicon glyphicon-time" aria-hidden="true"></span><br />
               Tue: 09:00 AM - 4:00 PM <br/> Thu: 10:00 AM - 8:00 PM <br /> Sat: 10:00 AM - 3:00 PM-->
            </p>
            <div class="visible-xs">
                <p><b><a style="color:#ffffff" href="tel:+12043250094">204 - 325 - 0094</a></b></p>
            </div>
        </div>

        <center>
            <div class="fb-like"
                 data-href="https://www.facebook.com/pages/Leanne-Dyck-Hair-Design/556720654394069?ref=br_rs&amp;pnref=lhc"
                 data-layout="button_count"
                 data-action="like"
                 data-show-faces="true"
                 data-share="true"
                 style="margin-bottom: 10px">
            </div>
        </center>

    </div>
</div>

<div class="container services">

    <div class="row" style="text-align: center">

        <div class="col-lg-4">
            <img class="img-circle-dashed" src="img/men2.jpg" alt="" style="width: 260px; height: 260px; margin-bottom: 25px;">
            <!--<h2>Men</h2>-->
            <p>In my salon I have all the attention and time for you. Have a question about a treatment or want a new hairstyle? Lets talk and we'll work something out.</p>
            <p><a class="btn btn-default btn-block" href="/services" role="button">Read more &raquo;</a></p>
        </div>

        <div class="col-lg-4">
            <img class="img-circle-dashed" src="img/hair-002.jpg" alt="" style="width: 260px; height: 260px; margin-bottom: 25px;">
            <!--<h2>Women</h2>-->
            <p>A good haircut and styling can make your features jump out. Therefore, listening to you and watching you is so important. What suits you makes you beautiful!</p>
            <p><a class="btn btn-default btn-block" href="/services" role="button">Read more &raquo;</a></p>
        </div>

        <div class="col-lg-4">
            <img class="img-circle-dashed" src="img/kids.jpg" alt="" style="width: 260px; height: 260px; margin-bottom: 25px;">
            <!--<h2>Children</h2>-->
            <p>I take time and special care for all children who visit my salon. The smallest kids can also be cut on the parents or guardians lap.</p>
            <p><a class="btn btn-default btn-block" href="/services" role="button">Read more &raquo;</a></p>
        </div>
    </div>
</div>
@endsection
