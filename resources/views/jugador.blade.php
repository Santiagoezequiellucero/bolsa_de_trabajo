@extends('layout.plantilla')

@section('title','Jugadores')
    
@section('content')
    <h1>Jugadores</h1>
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Ingresar</div>
    
                        <div class="card-body">
                            <form method="POST" action="{{route('datosJugador')}}">

                                @csrf
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Nombres</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="nombresJugador" value="{{old('nombresJugador')}}" autofocus="">
                                        @error('nombresJugador')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>                                   
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Apellido paterno</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="apellidoPaternoJugador" value="{{old('apellidoPaternoJugador')}}" autofocus="">
                                        @error('apellidoPaternoJugador')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Apellido materno</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="apellidoMaternoJugador" value="{{old('apellidoMaternoJugador')}}" autofocus="">
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control " name="nacimientoJugador" value="{{old('nacimientoJugador')}}" autofocus="">
                                        @error('nacimientoJugador')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>  
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Imagen de Perfil</label>
                                    <div class="col-md-6">
                                        <input type="file" class="form-control " name="fotoJugador" value="{{old('fotoJugador')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Nombre y apellido apoderado</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="nombresApoderado" value="{{old('nombresApoderado')}}" placeholder="Ingresa si eres menor de edad" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-md-4 col-form-label text-md-right">Telefono Apoderado</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="telefonoApoderado" value="{{old('telefonoApoderado')}}" placeholder="Ingresa si eres menor de edad" autofocus="">
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Club actual</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="clubJugador" value="{{old('clubJugador')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-md-4 col-form-label text-md-right">Fecha fin de Contrato</label>
                                    <div class="col-md-6">
                                        <input type="date" class="form-control " name="finContratoJugador" value="{{old('finContratoJugador')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Agente</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="agenteJugador" value="{{old('agenteJugador')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Video url</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="videoJugador1" value="{{old('videoJugador1')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Video url</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="videoJugador2" value="{{old('videoJugador2')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Video url</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="videoJugador3" value="{{old('videoJugador3')}}" autocomplete="name" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-md-4 col-form-label text-md-right">Pierna habil</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="piernaHabil" value="{{old('piernaHabil')}}" autofocus="">
                                        @error('piernaHabil')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Altura</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="altura" value="{{old('altura')}}" autofocus="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Posición</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="posicion" value="{{old('posicion')}}" autofocus="">
                                        @error('posicion')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label  class="col-md-4 col-form-label text-md-right">email</label>
                                    <div class="col-md-6">
                                        <input  type="text" class="form-control " name="emailJugador" value="{{old('emailJugador')}}"  autofocus="">
                                        @error('emailJugador')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Telefono</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="telefonoJugador" value="{{old('telefonoJugador')}}" autofocus="">
                                        @error('telefonoJugador')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>                           
    
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                    <div class="col-md-6">
                                        <input type="password" class="form-control " value="{{old('passwordJugador')}}" name="passwordJugador" >
                                        @error('passwordJugador')
                                        <br>
                                        <small>*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Perfil Transfermarkt - Soccerway</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="posicion" value="{{old('posicion')}}" autofocus="">
                                    </div> 
                                </div>

                                
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="rememberJugador" id="remember">
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