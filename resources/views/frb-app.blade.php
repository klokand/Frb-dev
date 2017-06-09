<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'FUSION REWARDS') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--Custome -->
		<link href="{{ asset('css/style1.css') }}" rel="stylesheet" type="text/css" > 
		<link href="{{ asset('css\vendor\font-awesome-4.7.0\css\font-awesome.min.css') }}" rel="stylesheet" type="text/css" >
		<!--vendor-->
			<!--nav-->
			<link href="{{ asset('css/vendor/menu.css') }}" rel="stylesheet" type="text/css" >	
			<!--nav end-->
		<!--vendor end-->
		
		
    </head>
    <body>
		<div class="container">
		@include('frb-layouts.header')
		@include('frb-layouts.memberBar')
		@yield('content')
		@include('frb-layouts.footer')
		</div>
    </body>
	<!--Javascript libraries-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--Custome Scripts-->
		<script src="js/app1.js"></script>
	<!--vendor -->
		<!--nav-->
			<script src="{{ asset('js/vendor/menu.js') }}"></script>
		<!--nav end-->
	<!-- vendor end-->
	
</html>
