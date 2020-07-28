@extends('layouts.layout')


@section('content')


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
                            <th>Nom</th>
                            <th>Prénoms</th>
                            <th>E-mail</th>
                            <th>Rôle</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td><img src="{{ asset('https://via.placeholder.com/110x110') }}" class="product-img" alt="Photo utilisateur"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->firstname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>
                                <a href="{{ Route('admin.users.destroy', $user->id) }}" class="btn btn-danger">Supprimer</a>
                                <a href="{{ Route('admin.users.edit', $user->id) }}" class="btn btn-primary">Modiffier</a>
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


@stop