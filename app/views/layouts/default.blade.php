<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">

	<header class="row">
		@include('includes.header')
	</header>

	<div class="row" style="margin-top:60px;">
		<div class="col-md-4">
			@yield('sidebar')
		</div>
		<div class="col-md-8">
			@yield('content')
		</div>
	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>