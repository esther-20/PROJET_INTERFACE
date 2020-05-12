@extends('layouts.app')


@section('content')
  
	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">{{ _("S'INSCRIRE") }}</div>
		  {{--  Start Form  --}}
		    	<form method="POST" action="{{ route('register') }}">
                        @csrf
				{{--  Nom  --}}
					<div class="form-group">
						<label for="exampleInputName" class="sr-only">Nom</label>
						<div class="position-relative has-icon-right">
							<input type="text" id="exampleInputName" class="form-control input-shadow @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Votre Nom">
							@error('name')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
							@enderror
							<div class="form-control-position"><i class="icon-user"></i></div>
						</div>
					</div>
				{{--  end Nom  --}}

				{{--  Prenoms  --}}
					<div class="form-group">
						<label for="exampleInputFirtname" class="sr-only">Prénoms</label>
						<div class="position-relative has-icon-right">
							<input type="text" id="exampleInputFirtname" class="form-control input-shadow @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" placeholder="Vos Prénoms">
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<div class="form-control-position"><i class="icon-user"></i></div>
						</div>
					</div>
				{{--  end Prenoms  --}}

				{{--  Adresse  --}}
					<div class="form-group">
						<label for="exampleInputAdresse" class="sr-only">Adresse</label>
						<div class="position-relative has-icon-right">
							<input type="text" id="exampleInputAdresse" class="form-control input-shadow @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" placeholder="Votre Adresse">
							@error('adresse')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<div class="form-control-position"><i class="zmdi zmdi-card"></i></div>
						</div>
					</div>
				{{--  end Adresse  --}}

				{{--  Tel  --}}
					<div class="form-group">
						<label for="exampleInputTel" class="sr-only">Tel</label>
						<div class="position-relative has-icon-right">
							<input type="tel" maxlength="8" minlength="8" patern="[0-9]{8}" id="exampleInputTel" class="form-control input-shadow  @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" placeholder="+225 01-02-03-04">
							@error('telephone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
							<div class="form-control-position"><i class="zmdi zmdi-account-box-phone"></i></div>
						</div>
					</div>
				{{--  end Tel  --}}

				{{--   E-mail  --}}
					<div class="form-group">
						<label for="exampleInputEmailId" class="sr-only">E-mail</label>
						<div class="position-relative has-icon-right">
							<input type="text" id="exampleInputEmailId" class="form-control input-shadow @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Votre E-mail">
							@error('email')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
							@enderror
							<div class="form-control-position">
								<i class="icon-envelope-open"></i>
							</div>
						</div>
					</div>
				{{--  end Email  --}}

				{{--  Password  --}}
					<div class="form-group">
						<label for="exampleInputPassword" class="sr-only">Mot de Passe</label>
						<div class="position-relative has-icon-right">
							<input type="text" id="exampleInputPassword" class="form-control input-shadow @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot de passe">
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
				{{--  end Password  --}}

				{{--  Password Confirm  --}}
					<div class="form-group">
						<label for="exampleInputPasswordConfirm" class="sr-only">Confirmez le mot de passe</label>
						<div class="position-relative has-icon-right">
							<input type="text" id="exampleInputPasswordConfirm" class="form-control input-shadow " name="password_confirmation" required autocomplete="new-password" placeholder="Mot de passe">
							<div class="form-control-position">
								<i class="icon-lock"></i>
							</div>
						</div>
					</div>
				{{--  end Password  --}}

				<button type="submit" class="btn btn-light btn-block waves-effect waves-light">{{ _("S'INSCRIRE") }}</button>

			</form>

		  {{--  end Form  --}}
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Already have an account? <a href="login.html"> Sign In here</a></p>
		  </div>
	     </div>

@stop