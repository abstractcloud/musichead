<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/auth/style.css">
</head>
<body class="body">
	<div class="container main-cont">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
			
				@yield('content')
				
			</div>
		</div>
	</div>
</body>
</html>