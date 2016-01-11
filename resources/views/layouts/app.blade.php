<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leanne Dyck Hair Design</title>
	{{--<link href="/css/app.css" rel="stylesheet">--}}
	<link rel="stylesheet" href="{{ elixir("css/app.css") }}">
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> --}}
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=319724514854583&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button"
						class="navbar-toggle collapsed"
						data-toggle="collapse"
						data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Leanne Dyck</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-navbar-collapse">
				<ul class="nav navbar-nav">
					<li {{ (Request::is('/') ? 'class=active' : '') }}><a href="/">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span> HOME</a>
					</li>
					<li {{ (Request::is('services') ? 'class=active' : '') }}>
						<a href="/services"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span> SERVICES</a>
					</li>
					<li {{ (Request::is('products') ? 'class=active' : '') }}>
						<a href="/products"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> PRODUCTS</a>
					</li>
					<li {{ (Request::is('about') ? 'class=active' : '') }}>
						<a href="/about"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> ABOUT</a>
					</li>
					<li {{ (Request::is('contact') ? 'class=active' : '') }}>
						<a href="/contact"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> CONTACT</a>
					</li>
					<li {{ (Request::is('gallery') ? 'class=active' : '') }}>
						<a href="/gallery"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> GALLERY</a>
					</li>

					<li {{ (Request::is('123') ? 'class=active' : '') }}>
                    	<a href="https://www.facebook.com/pages/Leanne-Dyck-Hair-Design/556720654394069" target="_blank">
                    		<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> FACEBOOK
                    	</a>
                    </li>

					<li class="dropdown">
						<a href="#"
						   class="dropdown-toggle"
						   data-toggle="dropdown"
						   role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> MORE <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="/terms">Terms of use</a></li>
							<li><a href="/privacy">Privacy Policy</a></li>
							<li><a href="/testimonials">Testimonials</a></li>
							<li><a href="/sitemap">Sitemap</a></li>
							<li class="divider"></li>
							<li><a href="/certificates">Gift certificates</a></li>
							<li><a href="/specials">Specials</a></li>
							<li><a href="/packages">Packages</a></li>
						</ul>
					</li>


				</ul>

				<ul class="nav navbar-nav navbar-right visible-lg">
					@if (Auth::guest())
						<p class="navbar-text navbar-right">
							<b>CALL ME &nbsp;<a class="phonenumber" href="tel:+12043250094">204 - 325 - 0094</a></b>
						</p>
						{{--
						<li><a href="/auth/login">Login</a></li>
						<li><a href="/auth/register">Register</a></li>
						--}}
					@else
						<li class="dropdown">
							<a href="#"
							   class="dropdown-toggle"
							   data-toggle="dropdown"
							   role="button"
							   aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/auth/logout">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<footer class="brands">
		<div class="container">
			<div class="row" style="text-align: center; height: auto;">

				<div class="col-lg-4 col-lg-push-4">
                    <h2 style="color: #707070; margin-top: 38px;"><em>&#8656; Suppliers &#8658;</em></h2>
                </div>

				<div class="col-lg-4 col-lg-pull-4">
					<a href="https://www.cosmoprofbeauty.com" title="Cosmoprof" target="_blank">
						<img style="margin-top: 5px;" src="/img/logo-cosmoprof.png" alt="Cosmoprof">
					</a>
				</div>

				<div class="col-lg-4">
                	<a href="http://www.espsalonsales.com" title="ESP Salon Sales" target="_blank">
                		<img style="height: 60px;margin-top: 20px;" src="/img/logo-esp.png" alt="ESP Salon Sales">
                	</a>
                </div>
			</div>
		</div>
    </footer>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1><span class="glyphicon glyphicon-info-sign text-center" aria-hidden="true"></span></h1>
					<address>
					  <b>Leanne Dyck Hair Design</b><br>
					  #21085 Rd 14N<br>
					  Winkler / MB<br>
					  <abbr title="Phone">P:</abbr> 204 - 325 - 0094<br/>
					  <abbr title="Email">E: </abbr><a href="mailto:#">bookings@leanne-hair-design.ca</a>
					</address>
					<hr>
					<h5><b>BUSINESS HOURS</b></h5>
					<p>Tue: 09:00am &mdash; 4:00pm <br>Thu: 01:00am &mdash; 8:00pm <br> Sat: 10:00am &mdash; 3:00pm</p>
				</div>
				<div class="col-md-4">
					<h1><span class="glyphicon glyphicon-link" aria-hidden="true"></span></h1>
					<ul class="list-unstyled">
              			<li><a href="/terms">Terms of use</a></li>
              			<li><a href="/privacy">Privacy Policy</a></li>
              			<li><a href="/testimonials">Testimonials</a></li>
              			<li><a href="/contact">Contact Me</a></li>
              			<li><a href="/sitemap">Sitemap</a></li>
            		</ul>
            		<hr/>
            		<h5><b>OFFERS &amp; SPECIALS</b></h5>
					<ul class="list-unstyled">
              			<li><a href="/certificates">Gift Certificates</a></li>
              			<li><a href="/specials">Specials</a></li>
              			<li><a href="/packages">Packages</a></li>
            		</ul>

				</div>
				<div class="col-md-4">
					<h1><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></h1>
					<div class="fb-like-box"
						 data-href="https://www.facebook.com/pages/Leanne-Dyck-Hair-Design/556720654394069?sk=timeline"
						 data-colorscheme="dark"
						 data-show-faces="true"
						 data-header="true"
						 data-stream="false"
						 data-show-border="true"></div>
				</div>
			</div>
			<hr>
			<p class="text-muted">&copy; Copyright {{ date('Y') }} Leanne Dyck Hair Design </p>
		</div>
	</footer>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<script>$('#bh').popover('show')</script>

	@if (Request::is('contact'))
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>
	var head = document.getElementsByTagName('head')[0];
    var insertBefore = head.insertBefore;

    head.insertBefore = function (newElement, referenceElement) {
        if (newElement.href && newElement.href.indexOf('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700') === 0) {
            console.info('Prevented Roboto from loading!');
            return;
        }

        insertBefore.call(head, newElement, referenceElement);
    };

	function init_map() {
		// 49.207929, -98.018077 // 49.1833,-97.9333 // 49.207628, -97.944801                       
		var myLocation = new google.maps.LatLng(49.207628, -97.944801);

		var mapOptions = {
		  center: myLocation,
		  zoom: 13,
		  mapTypeId: google.maps.MapTypeId.SATELLITE
		};

		var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h4 id="firstHeading" class="firstHeading">Leanne Dyck Hair Design</h4>'+
              '<div id="bodyContent">'+
              '<p><b>Directions</b>: Take a left, ' +
              'then take a right turn, <br>'+
              'drive some more and then you have found<br>  '+
              'my homebased salon.'+
              '</div>'+
              '</div>';

		var infowindow = new google.maps.InfoWindow({
        	content: contentString
        });

		var marker = new google.maps.Marker({
			position: myLocation,
			title: "Leanne Dyck Hair Design"});

		var map = new google.maps.Map(document.getElementById("map-container"),
			mapOptions);

		infowindow.open(map,marker);

		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});

		marker.setMap(map);
	}

	google.maps.event.addDomListener(window, 'load', init_map);
	</script>
	@endif
</body>
</html>
