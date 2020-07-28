@extends('layouts.layout')


@section('content')

    <div class="row mt-3">
      <div class="col-lg-8">
         <div class="card offset-2">
           	<div class="card-body">
           		<div class="card-title">Modification de {{ $user->name }} {{ $user->firstname }}</div>
           		<hr>
					<form action="{{ route('admin.users.update', $user) }}" method="POST">
							@method('PUT')
							@csrf
						@foreach($roles as $role)
							<div class="form-group">
								<div class="icheck-material-white">
									<input type="checkbox" name="roles[]" value="{{ $role->id }}" id="{{ $role->id }}" @if ($user->role == $role->name) checked @endif >
									
									<label for="{{ $role->id }}">{{ $role->name }}</label>

								</div>
							</div>
						@endforeach
						
						<div class="form-group">
							<button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Enregistrer</button>
						</div>
          		</form>
         </div>
         </div>
      </div>
     
    </div><!--End Row-->

@stop