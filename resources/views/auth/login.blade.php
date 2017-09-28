@extends('auth.auth')
		
@section('content')
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
								<li class="error">{{ $error }}</li> @endforeach </ul>
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
			<a href="/password/reset">
				<div>
					<button class="form-control back-but"> 
						Forgot password
					</button>
				</div>
			</a>
			<a href="/registration">
				<div>
					<button class="form-control back-but"> 
						Registration 
					</button>
				</div>
			</a>
		</div>
	</div> 
	
@endsection('content')