@extends('layout.plantilla')

@section('title','Entrenadores')
    
@section('content')
<h1 class="fs-1 fw-light"><center>Entrenadores</center> </h1>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Ingresar</div>
    
                        <div class="card-body">
                            <form method="POST" action="">

                                @csrf
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Nombres</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="nombresEntrenador" value="{{old('nombresEntrenador')}}" autofocus="">
                                        @error('nombresEntrenador')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Apellido paterno</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="apellidoPaternoEntrenador" value="{{old('apellidoPaternoEntrenador')}}" autofocus="">
                                        @error('apellidoPaternoEntrenador')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Apellido materno</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="apellidoMaternoEntrenador" value="{{old('apellidoMaternoEntrenador')}}" autofocus="">
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control " name="nacimientoEntrenador" value="{{old('nacimientoEntrenador')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Club actual</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="clubEntrenador" value="{{old('clubEntrenador')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Fecha fin de Contrato</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control " name="finContratoEntrenador" value="{{old('finContratoEntrenador')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Sitio web</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="webEntrenador" value="{{old('webEntrenador')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Agente</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="agenteEntrenador" value="{{old('agenteEntrenador')}}" autofocus="">
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">email</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control " name="emailEntrenador" value="{{old('emailEntrenador')}}" autofocus="">
                                        @error('emailEntrenador')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Telefono</label>
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control " name="telefonoEntrenador" value="{{old('telefonoEntrenador')}}" autofocus="">
                                        @error('telefonoEntrenador')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>                           
    
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control " name="passwordEntrenador" value="{{old('passwordEntrenador')}}" autofocus="">
                                        @error('passwordEntrenador')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="rememberEntrenador" id="remember">
                                            <label class="form-check-label" for="remember">
                                                Recuérdame
                                            </label>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-success">
                                            Registrarse
                                        </button>
                                        <a class="btn btn-link" href="http://totalges.cl/password/reset">
                                        ¿Olvidaste tu contraseña?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <br>
    
@endsection  