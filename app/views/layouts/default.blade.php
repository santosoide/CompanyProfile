<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset='64' onLoad="$.stellar();">
	<!-- preloader -->
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	
	<!--start navigation-->
	<div>
		@include('includes.navigation')
	</div>
	
	<!--start intro-->
	<section id="intro">
		@include('includes.intro')
	</section>
	<!--start services header-->
	<section id="services-top">
		@include('includes.services-header')
	</section>
	
	<!--start services-->
	<section id="services">
		@include('includes.services')
	</section>

	<!--start works header-->
	<section id="works-top">
		@include('includes.works-header')
	</section>
	
	<!--start works-->
	<section id="works">
		@include('includes.works')
	</section>

	<!--start gallery header-->
	<section id="gallery-top">
		@includegallery-header')
	</section>
	
	<!--start gallery-->
	<section id="gallery">
		@include('includes.gallery')
	</section>

	<!--start team header-->
	<section id="team-top">
		@include('includes.team-header')
	</section>
	
	<!--start team-->
	<section id="team">
		@include('includes.team')
	</section>

	<!--start contact header-->
	<section id="contact-top">
		@include('includes.contact-header')
	</section>
	
	<!--start contact-->
	<section id="contact">
		@include('includes.contact')
	</section>

	<!--start footer-->
	<section id="footer">
		@include('includes.footer')
	</section>

	
 <!-- Scripts are placed here -->
{{ HTML::script('public/js/jquery.min.js') }}
{{ HTML::script('public/js/bootstrap.min.js') }}
{{ HTML::script('public/js/custom.js') }}
{{ HTML::script('public/js/retina.js') }}
{{ HTML::script('public/js/jquery.easing-1.3.pack.js') }}
{{ HTML::script('public/js/jquery.nicescroll.min.js') }}
{{ HTML::script('public/js/jquery.stellar.js') }}
{{ HTML::script('public/js/jquery.form.js') }}
{{ HTML::script('public/js/bootstrap-lightbox.min.js') }}

<!--preloader-->
<script type="text/javascript">
	$(window).load(function() {
		$("#status").fadeOut();
		$("#preloader").delay(350).fadeOut("slow");
	})
</script>
<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'YOUR GOOGLE ANALYTICS CODE']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	
</body>
</html>