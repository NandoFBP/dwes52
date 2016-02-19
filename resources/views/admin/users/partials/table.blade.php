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