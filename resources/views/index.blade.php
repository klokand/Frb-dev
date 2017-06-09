<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FUSION REWARDS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--Custome -->
		<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
		
    </head>
    <body>
		<div class="container">
		@include('layouts.header')
		@include('layouts.memberBar')
		@yield('content')
		@include('layouts.footer')
		</div>
    </body>
	<!--Javascript libraries-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--Custome Scripts-->
		<script src="/"></script>
	
</html>
