@extends('auth.auth')
		
@section('content')

	<div class="panel panel-default">
			<div class="panel-heading">Registration</div>

		<div class="panel-body custom-panel">
			<form class="form-horizontal" method="POST" action="{{ route('reg') }}">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="name" class="control-label">Name</label>

					<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

					@if ($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
					@endif
				</div>

				<div class="form-group">
					<label for="email" class="control-label">E-Mail Address</label>


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

				<div class="form-group">
					<label for="password-confirm" class="control-label">Confirm Password</label>

					<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
							Registration
					</button>
				</div>
			</form>
			<hr>
			<a href="/login">
				<div>
					<button class="form-control back-but">
						Sing In
					</button>
				</div>
			</a>
		</div>
	</div>

@endsection('content')