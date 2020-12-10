<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Sansita:400,700|Roboto:400,500&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('public/assets/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('public/assets/css/swiper.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/assets/css/dark.css')}}" type="text/css" />
		
	<!-- Yoga Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{asset('public/assets/css/colors.php?color=7E9680')}}" type="text/css" /> <!-- Yoga Theme Color -->
	<link rel="stylesheet" href="{{asset('public/theme/css/fonts.css')}}" type="text/css" /> <!-- Yoga Theme Font -->
	<link rel="stylesheet" href="{{asset('public/theme/yoga.css')}}" type="text/css" /> <!-- Yoga Theme Custom CSS -->
	<!-- / -->

	<link rel="stylesheet" href="{{asset('public/assets/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/assets/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('public/assets/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('public/assets/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Yoga | Canvas</title>

</head>

<body class="stretched sticky-footer">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

        @include('partials.header')

        @yield('content')

        @include('partials.footer')

    </div>

    	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
    <script src="{{asset('public/assets/js/jquery.js')}}"></script>
	<script src="{{asset('public/assets/js/plugins.min.js')}}"></script>

	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>
	<!-- For Countdown -->
	<script src="{{asset('public/assets/js/components/moment.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('public/assets/js/functions.js')}}"></script>

	<script>
		// Owl Carousel Scripts
		jQuery(window).on( 'pluginCarouselReady', function(){
			$('#oc-teachers').owlCarousel({
				items: 3,
				margin: 30,
				nav: true,
				navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
				dots: false,
				smartSpeed: 300,
				stagePadding: 60,
				responsive:{
					500: { stagePadding: 100, margin: 30, items: 1 },
					991: { stagePadding: 100, margin: 40, smartSpeed: 400, items: 3 },
					1200: { stagePadding: 100, margin: 40, smartSpeed: 400, items: 3}
				},
			});
		});

		//Current Week
		Date.prototype.getWeek = function(start) {
			//Calcing the starting point
			start = start || 0;
			var today = new Date(this.setHours(0, 0, 0, 0));
			var day = today.getDay() - start;
			var date = today.getDate() - day;

			// Grabbing Start/End Dates
			var StartDate = new Date(today.setDate(date));
			var EndDate = new Date(today.setDate(date + 6));
			return [StartDate, EndDate];
		}
		var Dates = new Date().getWeek();
		$("#week-details").text(Dates[0].toLocaleDateString() + ' - '+ Dates[1].toLocaleDateString());
	</script>

</body>
</html>