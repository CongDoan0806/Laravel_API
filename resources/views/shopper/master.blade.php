<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopper</title>
    <link href="{{ asset('eshopper/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('eshopper/css/animate.css')}}" rel="stylesheet">
	<link href="{{ asset('eshopper/css/main.css')}}" rel="stylesheet">
	<link href="{{ asset('eshopper/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<body>
    @include('shopper.header');

    @yield('content');

    @include('shopper.footer');

    @include('shopper.scripts');
</body>
</html>