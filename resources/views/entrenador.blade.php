@extends('layout.plantilla')

@section('title','Entrenadores')
    
@section('content')
    <h1>Entrenadores</h1> <br>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Ingresar</div>
    
                        <div class="card-body">
                            <form method="POST" action="">

                                @csrf
                                <input type="hidden" name="_token" value="Zot92p7BPlMxQnkubsfCxraSBjzEgtM2CONY9vyZ">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nombres</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="nombresEntrenador" value="" required="" autocomplete="name" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Apellido paterno</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="apellidoPaternoEntrenador" value="" required="" autocomplete="name" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Apellido materno</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="apellidoMaternoEntrenador"  autocomplete="name" autofocus="">
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="date" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control " name="nacimientoEntrenador" value="" required="" autocomplete="date" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Club actual</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="clubEntrenador"  autocomplete="name" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-md-4 col-form-label text-md-right">Fecha fin de Contrato</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control " name="finContrato"  autocomplete="date" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Sitio web</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="webEntrenador"  autocomplete="name" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Agente</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="agenteEntrenador"  autocomplete="name" autofocus="">
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">email</label>
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control " name="emailEntrenador" value="" required="" autocomplete="email" autofocus="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="phone" class="col-md-4 col-form-label text-md-right">Telefono</label>
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control " name="telefonoEntrenador" value="" required="" autocomplete="phone" autofocus="">
                                    </div>
                                </div>                           
    
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control " name="passwordEntrenador" required="" autocomplete="current-password">
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
                                        <button type="submit" class="btn btn-primary">
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