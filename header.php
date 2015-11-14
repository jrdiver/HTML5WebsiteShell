		
		<link rel="shortcut icon" href="/favicon.ico" />
		<!-- Bootstrap -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="/css/style.css">
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Ubuntu%7COrbitron' type='text/css'>
		<script src="/js/jquery-1.11.3.min.js"></script>
		<!--[if lt IE 9]>
			<script src="/js/html5shiv.min.js"></script>
			<script src="/js/respond.min.js"></script>
		<![endif]-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'YourIDHere', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	|                   This framework was designed by Matthew Goffard                    |
	|                                   AKA: Jrdiver                                      |
	|                              Last updated 11-13-2015                                |
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	
	<body>
		<!--[if lt IE 9]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.  This site was designed with Chrome and Firefox, and most of the features are supported or have workarounds to display correctly in Internet Explorer 8 and newer.  If you see this Message, The site is more then likely showing in its "Mobile" Format, A single column.</p>
		<![endif]-->
		<header>
			<!--Pulling in the Common header -->
			<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php';?>
			
			<a href="/">
			<!--Load's the smallest possible image for the browser in an attempt to reduce page size, Where I used this framework, its a logo banner.  IE has issues with this so...fallback line is included -->
			<picture>
				<source media="(min-width: 1200px)" srcset="http://placehold.it/1600x312">
				<source media="(min-width: 992px)" srcset="http://placehold.it/1200x234">
				<source media="(min-width: 768px)" srcset="http://placehold.it/992x193">
				<source media="(min-width: 1px)" srcset="http://placehold.it/768x150">
				<!-- img tag for browsers that do not support picture element -->
				<img src="http://placehold.it/1600x312" class="img-responsive" alt="Logo Banner">
			</picture></a>
		</header>
		<div class="container-fluid">