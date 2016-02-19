@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Usuarios</div>

                <div class="panel-body">
                    <a class="btn btn-info" href="{{ route('admin.users.create') }}" role="button">
                        Crear Usuario
                    </a>
                    <p>Hay {{ $users->lastPage() }} páginas</p>
                    <p>Hay {{ $users->total() }} usuarios</p>
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                        @foreach($users as $user)
                        <tr>
                            <th>{{ $user->id }}</th>
                            <th>{{ $user->fullName }}</th>
                            <th>{{ $user->email }}</th>
                            <th>
                                <a href="">Editar</a>
                                <a href="">Eliminar</a>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection