@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Usuario</div>

                <div class="panel-body">
                    {{ Form::open(['route' => 'admin.users.update', 'method' => 'PUT']) }}
                        @include('admin.users.partials.fields')
                        <button type="submit" class="btn btn-default">
                            Actualizar Usuario
                        </button>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection