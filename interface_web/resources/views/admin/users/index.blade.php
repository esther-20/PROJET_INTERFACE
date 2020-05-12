@extends('layouts.layout')


@section('content')



<!-- Start wrapper-->
 	<div id="wrapper">

		<!--  sidebar  -->

            @include('layouts.sidebar')

		<!--  sidebar  -->

		<!--  topbar  -->

			@include('layouts.topbar')

		<!-- end topbar  -->


<div class="clearfix"></div>

	<div class="content-wrapper">
		<div class="container-fluid">

<!--Start Dashboard Content-->

    <!--Start Row-->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header">Recent Order Tables</div>
                <div class="table-responsive">
                <table class="table align-items-center table-flush table-hover table-borderless">
                    <thead>
                        <tr>
                            <th>{{ _('#') }}</th>
                            <th>Photo</th>
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>E-mail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td><img src="{{ asset('https://via.placeholder.com/110x110') }}" class="product-img" alt="product img"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="" class="btn btn-danger">Supprimer</a>
                                <a href="" class="btn btn-primary">Modiffier</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

    


                </table>
                </div>
                </div>
            </div>
        </div>
    <!--End Row-->

<!--End Dashboard Content-->
		



	<!--start overlay-->
		<div class="overlay toggle-menu"></div>
	<!--end overlay-->
		
	</div><!-- End container-fluid-->
		
</div><!--End content-wrapper-->
    

@stop
