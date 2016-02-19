                        <div class="form-group">
                            {{ Form::label('email', 'Correo electrónico') }}
                            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Por favor, introduzca su email']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('password', 'Contraseña') }}
                            {{ Form::password('password', ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('firstName', 'Nombre') }}
                            {{ Form::text('firstName', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('lastName', 'Apellido') }}
                            {{ Form::text('lastName', null, ['class' => 'form-control']) }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('rol', 'Rol') }}
                            {{ Form::select('rol',['' => 'Seleccione Rol', 'Administrador' => 'Administrador', 'Profesor' => 'Profesor', 'AlumnoESO' => 'Alumno de E.S.O.', 'AlumnoFP' => 'Alumno de F.P.', 'AlumnoBach' => 'Alumno de Bachillerato'], null, ['class' => 'form-control']) }}
                        </div>