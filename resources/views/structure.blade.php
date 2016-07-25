<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="Parapharm is a Lebanese distributor for dermatological and skincare products.">
	<meta name="keywords" content="Parapharm, Lebanon, Lebanese, distributor, parapharmacy, parapharmaceutical products, noreva, led, eye care, cosmetics, dermatology, dermatological, beautymed, contapharm, pharmasouples, supplier, fournisseur, dermatologique, soin, skincare, peau, pharmaceutique, parafarm, distributeur, liban, laboratoire" />
	<meta name="author" content="Parapharm SAL" />
	<meta name="designer" content="Jeanine Harb" />	
	
	<link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
	
	<title>Parapharm SAL</title>
	
	<!-- Stylesheets -->
	<link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> -->
	<link rel="stylesheet" href="{{ URL::asset('bootstrap-material-design-font/css/material.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('et-line-font-plugin/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('tether/tether.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('socicon/css/socicon.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('animate.css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('dropdown/css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('theme/css/style.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('mobirise/css/mbr-additional.css') }}" type="text/css">

	<!-- <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"> -->

	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900">
</head>

<body>
	<section id="menu-5">
		<nav class="navbar navbar-dropdown navbar-fixed-top">
			<div class="container">
				<div class="mbr-table">
					<div class="mbr-table-cell">
						<div class="navbar-brand">
							<a href="{{ url('/') }}" class="navbar-logo"><img src="{{ URL::asset('images/logo1.png') }}" alt="Parapharm SAL" title="Parapharm SAL"></a>
						</div>
					</div>
					<div class="mbr-table-cell">

						<button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
							☰
						</button>

						<ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
							<li class="nav-item"><a class="nav-link link" href="{{ url('/') }}">HOME</a></li>
							<li class="nav-item"><a class="nav-link link" href="{{ url('/about') }}">ABOUT</a></li>
							<li class="nav-item dropdown"><a class="nav-link link dropdown-toggle" data-toggle="dropdown-submenu" href="#" aria-expanded="false">PRODUCTS</a>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{ url('/products/noreva') }}">Laboratoires NOREVA</a>
									<a class="dropdown-item" href="{{ url('/products/contapharm') }}">Laboratoires CONTAPHARM</a>
									<a class="dropdown-item" href="{{ url('/products/beautymed') }}">BeautyMed</a>
									<a class="dropdown-item" href="{{ url('/products/onagrine') }}">Onagrine</a>
								</div>
							</li>
							<li class="nav-item"><a class="nav-link link" href="{{ url('/contact') }}">CONTACT</a></li>
							<li class="nav-item"><a class="nav-link link" href="https://blog.parapharm.com.lb" target="_blank">BLOG</a></li>
						</ul>

						<button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
							☰
						</button>

						</div>
					</div>
				</div>
			</nav>
		</section>

		@yield('content')

		<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-3" style="background-color: rgb(52, 152, 219); padding-top: 90px; padding-bottom: 90px;">

			<div class="container">
				<div class="row">
					<div class="mbr-footer-content col-xs-12 col-md-3">
						<div><img src="{{ URL::asset('images/logo1.png') }}" style="max-height: 100px;"></div>
					</div>
					<div class="mbr-footer-content col-xs-12 col-md-3" >
						<p style="margin-left: 5%;"><strong>Address</strong><br>
							Parapharm Bldg <br>
							Libyan Embassy Street <br>
							Mar Takla, Hazmieh - Lebanon<br>
							P.O.Box: 77 Hazmieh, Lebanon</p>
						</div>
						<div class="mbr-footer-content col-xs-12 col-md-3">
							<p style="margin-left: 5%;"><strong>Contact</strong><br>
								Email: contact@parapharm.com.lb<br>
								Phone: +961 5 454 111 / 333 <br>
								Fax: +961 5 457 707</p>
							</div>
							<div class="mbr-footer-content col-xs-12 col-md-3">
								<p style="margin-left: 5%;"><strong>Follow Us</strong><br>
									<a class="nav-link link" href="https://www.facebook.com/Parapharm" target="_blank" aria-expanded="false"><span class="socicon socicon-facebook mbr-iconfont mbr-iconfont-btn"></span></a>
									<a class="nav-link link" href="https://www.linkedin.com/company/parapharm-s-a-l" target="_blank" aria-expanded="false"><span class="socicon socicon-linkedin mbr-iconfont mbr-iconfont-btn"></span></a>
									<a class="nav-link link" href="https://blog.parapharm.com.lb" target="_blank" aria-expanded="false"><span class="socicon socicon-wordpress mbr-iconfont mbr-iconfont-btn"></span></a>
									<a class="nav-link link" href="mailto:contact@parapharm.com.lb" target="_blank" aria-expanded="false"><span class="socicon socicon-mail mbr-iconfont mbr-iconfont-btn"></span></a></p>
								</div>

							</div>
						</div>
					</section>

					<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-4" style="background-color: rgb(50, 50, 50); padding-top: 1.75rem; padding-bottom: 1.75rem;">

						<div class="container">
							<p class="text-xs-center">Copyright &copy; 1999 - 2016 Parapharm SAL. All Rights Reserved.</p>
							<p class="text-xs-center">Site designed by <a href="https://www.linkedin.com/in/jeanineharb" target="_blank">Jeanine Harb</a>.</p>
						</div>
					</footer>

					<script src="{{ URL::asset('web/assets/jquery/jquery.min.js') }}"></script>
					<script src="{{ URL::asset('tether/tether.min.js') }}"></script>
					<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
					<script src="{{ URL::asset('smooth-scroll/SmoothScroll.js') }}"></script>
					<script src="{{ URL::asset('viewportChecker/jquery.viewportchecker.js') }}"></script>
					<script src="{{ URL::asset('jarallax/jarallax.js') }}"></script>
					<script src="{{ URL::asset('dropdown/js/script.min.js') }}"></script>
					<script src="{{ URL::asset('theme/js/script.js') }}"></script>
					<script src="{{ URL::asset('masonry/masonry.pkgd.min.js') }}"></script>
					<script src="{{ URL::asset('imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
					<script src="{{ URL::asset('bootstrap-carousel-swipe/bootstrap-carousel-swipe.js') }}"></script>
					<script src="{{ URL::asset('mobirise-gallery/script.js') }}"></script>

					<input name="animation" type="hidden">
				</body>
				</html>
