<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}"> -->
	
	<title>Parapharm SAL</title>
	
	<!-- Stylesheets -->
	<link href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

	<!-- <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet"> -->

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>

<body>


	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">Parapharm SAL</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/about') }}">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Laboratoires NOREVA</a></li>
							<li><a href="#">Laboratoires CONTAPHARM</a></li>
							<li><a href="#">BeautyMed</a></li>
							<li><a href="#">Onagrine</a></li>
						</ul>
					</li>
					<li><a href="{{ url('/contact') }}">Contact</a></li>
					<li><a href="http://blog.parapharm.com.lb/">Blog</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="https://www.facebook.com/Parapharm" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="https://www.linkedin.com/company/parapharm-s-a-l" target="_blank"><i class="fa fa-linkedin-square"></i></a></li>
					<li><a href="mailto:contact@parapharm.com.lb"><i class="fa fa-envelope"></i></a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	
	<div class="container">
	@yield('content')
	</div>

	
	
	<!-- Scripts -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>

	<script type="text/javascript">
		$(document).ready(function () {
        $('ul.nav > li').click(function (e) {
            e.preventDefault();
            $('ul.nav > li').removeClass('active');
            $(this).addClass('active');                
        });            
    });
	
</script>
</body>
</html>
