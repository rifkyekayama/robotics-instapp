<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
	<title>Elite Admin - University Admin Dashboard</title>
	<!-- Bootstrap Core CSS -->
	<link href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
	<!-- Morris CSS -->
	<link href="{{ asset('plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
	<!-- animation CSS -->
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<!-- color CSS -->
	<link href="{{ asset('css/colors/blue.css') }}" id="theme" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o), m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
		ga('create', 'UA-19175540-9', 'auto');
		ga('send', 'pageview');
	</script>
</head>

<body>
	<!-- Preloader -->
	<div class="preloader">
		<div class="cssload-speeding-wheel"></div>
	</div>
	<div id="wrapper">
		<!-- NAVIGATION -->
		@include('includes.navigation')
		{{-- LEFT NAVBAR --}}
		@include('includes.left-navbar')
		{{-- CONTENT --}}
		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				@yield('content')
			</div>
			<footer class="footer text-center"> 2016 &copy; Elite Admin brought to you by themedesigner.in </footer>
		</div>

	</div>
	<!-- /#wrapper -->
	<!-- jQuery -->
	<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- Menu Plugin JavaScript -->
	<script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
	<!--slimscroll JavaScript -->
	<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
	<!--Wave Effects -->
	<script src="{{ asset('js/waves.js') }}"></script>
	<!--Morris JavaScript -->
	<script src="{{ asset('plugins/bower_components/raphael/raphael-min.js') }}"></script>
	<script src="{{ asset('plugins/bower_components/morrisjs/morris.js') }}"></script>
	<!-- Sparkline chart JavaScript -->
	<script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
	<!-- Custom Theme JavaScript -->
	<script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/dashboard1.js') }}"></script>
	
	<!--Style Switcher -->
	<script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
</body>

</html>