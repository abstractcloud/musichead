<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
		<link rel="stylesheet" href="/css/auth/style.css">
    @include('layouts.partials.styles')
</head>
<body class="body">
	<div class="container main-cont">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
						<div class="panel-heading">Sing In</div>

					<div class="panel-body custom-panel">
						<form class="form-horizontal" method="POST" action="{{ route('sessions') }}">
							{{ csrf_field() }}

							<div class="form-group">
									<label for="email" class="control-label custom-label">E-Mail Address</label>
								
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
							</div>

							<div class="form-group">
								<label for="password" class="control-label">Password</label>

									<input id="password" type="password" class="form-control" name="password" required>

									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
							</div>
							@if(count($errors))
							<div class="form-group">
								<div class="aletr alert-danger error-block">
									<ul> @foreach ($errors->all() as $error)
										<li class="error">{{ $error }}</li> @endforeach
										</ul>
									</div>
								</div>
							@endif

	
							<div class="form-group">
									<button type="submit" class="form-control costom-but">
										Sind In
									</button>
							</div>
						</form>
						<hr>
						 
						<a href="/registration">
							<div>
								<button class="form-control back-but">
									Registration
								</button>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>