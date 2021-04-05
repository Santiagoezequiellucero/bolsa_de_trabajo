@extends('layout.plantilla')

@section('title','Club')
    
@section('content')
<h1 class="fs-1 fw-light"><center>Clubes</center> </h1>
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
                                    <label class="col-md-4 col-form-label text-md-right">Nombre Club</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="nombreClub" value="{{old('nombreClub')}}" autofocus="">
                                        @error('nombreClub')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">País</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="paisClub" value="{{old('paisClub')}}" autofocus="">
                                        @error('paisClub')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">email</label>
                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control " name="emailClub" value="{{old('emailClub')}}" autofocus="">
                                        @error('emailClub')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Telefono</label>
                                    <div class="col-md-6">
                                        <input id="text" type="text" class="form-control " name="telefonoClub" value="{{old('telefonoClub')}}" autofocus="">
                                        @error('telefonoClub')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Sitio web</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control " name="webClub" value="{{old('webClub')}}" autofocus="">
                                        @error('webClub')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>                    
    
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control " name="passwordClub" value="{{old('passwordClub')}}" autofocus="">
                                        @error('passwordClub')
                                        <br>
                                        <small class="text-danger">*{{$message}}</small>
                                        <br>                                        
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="rememberClub" id="remember">
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
    </main> 
    
@endsection  