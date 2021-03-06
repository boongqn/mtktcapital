<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MTKT Capital</title>
    
    <!-- group libary css   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.1/css/simple-line-icons.css">

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styles/css/bootstrap.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styles/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styles/css/carousel.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styles/css/summernote.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('styles/css/main.css') }}">
    
    <!-- group libary js   -->
    <script type="text/javascript" src="{{ URL::asset('styles/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('styles/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('styles/js/summernote.min.js') }}"></script>

    <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-77407830-1', 'auto');
		ga('send', 'pageview');
	</script>
	
	<style type="text/css">
		.marketing h3 {
			line-height: 30px;
		}
		.marketing p {
			text-align: justify;
			line-height: 23px;
    		font-size: 14px;
		}
		.apply-now-slider .img-button-apply-slider {
			margin-top: 220px;
		}

	</style>
</head>
<body>
	

	<div id="wrap">


        @include('partials.header')
		

		<!-- Wrap content here -->
		@yield('content')

    </div>


    
	<footer class="footer"></footer>
    
	
	<script type="text/javascript">
		$.ajaxSetup({
	        headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
		});

		$(document).ready(function() {

			setTimeout(()=>{
		        $('.summernote').summernote();
		    }, 1000);

	    });
	</script>
	<script type="text/javascript" src="{{ URL::asset('styles/js/main.js') }}"></script>

</body>
</html>