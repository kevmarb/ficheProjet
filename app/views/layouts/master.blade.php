<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
		#main {
			padding-top: 60px;
		}
		.error {
			color: red;
		}
	</style>
	{{HTML::style('css/bootstrap.min.css')}}
</head>
<body>
	
	<div class="container" id="main">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			@yield('content')
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			@yield('sidebar')
		</div>
	</div>


	{{HTML::script('js/bootstrap.min.js')}}
</body>
</html>
