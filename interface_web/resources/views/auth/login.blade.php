@extends('layouts.app')


@section('content')

<!-- Start wrapper-->
 	<div id="wrapper">
	<div class="loader-wrapper">
 		<div class="lds-ring">
		<div class="card card-authentication1 mx-auto my-5">
			<div class="card-body">
		 	<div class="card-content p-2">
		 		<div class="text-center">
		 			<img src="assets/images/logo-icon.png" alt="logo icon">
		 		</div>
		  	<div class="card-title text-uppercase text-center py-3">Se Connecter</div>

		{{--  begin form  --}}
			<form method="POST" action="{{ route('login') }}">
            					@csrf
			{{--  start E-mail  --}}
			  	<div class="form-group">
					<label for="exampleInputUsername" class="sr-only">E-mail</label>
					<div class="position-relative has-icon-right">
						<input type="email" id="exampleInputUsername" class="form-control input-shadow @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus value="{{ old('email') }}" placeholder="E-mail">
						@error('email')
                     <span class="invalid-feedback" role="alert">
                     	<strong>{{ $message }}</strong>
                     </span>
                  @enderror
						<div class="form-control-position">
							<i class="icon-user"></i>
						</div>
					</div>
			  	</div>
			{{--  end E-mail  --}}
			
			{{--  Begin Password  --}}
			  	<div class="form-group">
			  		<label for="exampleInputPassword" class="sr-only">Mot de Passe</label>
			   	<div class="position-relative has-icon-right">
				  		<input type="password" id="exampleInputPassword" class="form-control input-shadow  @error('password') is-invalid @enderror" name="password" required placeholder="Mot de Passe">
						@error('password')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                  @enderror
						<div class="form-control-position">
						<i class="icon-lock"></i>
						</div>
					</div>
				</div>
			{{--  End Password  --}}

			{{--  Begin Remember --}}
				<div class="form-row text-center">
					<div class="form-group col-12">
						<div class="icheck-material-white">
							<input type="checkbox" id="user-checkbox" checked="" name="remember" id="remember" {{ old('remember') ? 'checked' : ''}} />
							<label for="user-checkbox">Se souvenir de moi</label>
						</div>
					</div>
				</div>
			{{--  end Remember --}}

			  	<button type="submit" class="btn btn-light btn-block">Se connecter</button>
					@if (Route::has('password.request'))
						<a class="btn btn-link" href="{{ route('password.request') }}">
								{{ __('Mot de Passe Oublié ?') }}
						</a>
					@endif
			</form>
		{{--  end Form --}}
		
		   </div>
		  </div>
	     </div>

@stop