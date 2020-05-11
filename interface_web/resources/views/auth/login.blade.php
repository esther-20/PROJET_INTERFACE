<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Titre de lappli</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- Start Preloader -->
   <div id="pageloader-overlay" class="visible incoming">
		<div class="loader-wrapper-outer">
		<div class="loader-wrapper-inner">
		<div class="loader"></div></div></div>
	</div>
<!-- end Preloader -->

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










	
	 
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
