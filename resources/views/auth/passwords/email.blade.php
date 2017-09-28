@extends('auth.auth')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Reset Password</div>

		<div class="panel-body custom-panel">
			@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
			@endif

			<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
				{{ csrf_field() }}

				<div class="form-group">
					<label for="email" class=" control-label custom-la">E-Mail Address</label>
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

					@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					@endif

				</div>

				<div class="form-group">  
					<button type="submit" class="form-control costom-but">
						Send Password Reset Link
					</button>
				</div>
			</form>
		</div>
	</div>
@endsection
