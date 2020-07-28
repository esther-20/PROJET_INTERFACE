@extends('layouts.layout')


@section('content')

    <div class="row mt-3">
      <div class="col-lg-8">
         <div class="card offset-2">
           	<div class="card-body">
           		<div class="card-title">Modification de {{ $user->name }} {{ $user->firstname }}</div>
           		<hr>
					<form action="" method="">

						<!-- name -->
						<div class="form-group">
							<label for="input-1">Nom</label>
							<input type="text" class="form-control" value="{{ $user->name }}" id="input-1">
						</div>

						<!-- firstname -->
						<div class="form-group">
							<label for="input-2">Prénoms</label>
							<input type="text" class="form-control" id="input-2" value="{{ $user->firstname }}">
						</div>

						<!-- email -->
						<div class="form-group">
							<label for="input-3">Email</label>
							<input type="email" class="form-control" id="input-3" value="{{ $user->email }}">
						</div>
						<!-- telephone -->
						<div class="form-group">
							<label for="input-4">Téléphone</label>
							<input type="tel" maxlength="8" minlength="8" class="form-control" id="input-4" value="{{ $user->telephone }}">
						</div>

						<!-- password -->
						<div class="form-group">
							<label for="input-5">Mot de passe</label>
							<input type="text" class="form-control" id="input-5" placeholder="Enter Password">
						</div>
						
						<div class="form-group">
							<button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Enregistrer</button>
						</div>
          		</form>
         </div>
         </div>
      </div>
     
    </div><!--End Row-->

@stop