<!DOCTYPE html>
<html>
<head>
	<title>@yield("title")</title>
	{!! HTML::style("assets/css/bootstrap.min.css") !!}

	<style type="text/css">
	    body {
	        padding-top: 60px;
	    }
	</style>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Confesh</a>
			</div>
			<nav class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Home</a></li>
					<li><a href="#signin">SignIn</a></li>
					<li><a href="#signup">SignUp</a></li>
				</ul>
			</nav>
		</div><!--/.container -->
	</header>

	<div class="container">
		@yield("content")
		<hr>
		<footer>
			<p>&copy; Confesh 2014</p>
		</footer>
	</div><!--/.container -->


	

	<!-- Bootstrap core JavaScript
    ================================================== -->
    {!! HTML::script("assets/js/jquery-1.11.1.min.js") !!}
    {!! HTML::script("assets/js/bootstrap.min.js") !!}
</body>
</html>