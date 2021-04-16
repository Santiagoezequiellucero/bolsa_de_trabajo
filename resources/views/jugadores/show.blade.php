@extends('layout.plantilla')

@section('title','Perfil')
    
@section('content')
<br>
    <div class="text-center">
        <h1 class="fs-1 fw-light"><center>Mi perfil</center> </h1>
        <a href="#" class="navbar-brand">
            <h4 class="fs-6 fw-light" style="color: black">Editar perfil</h4>
        </a>
    </div>

    <div class="row justify-content-center align-items-center vh-100 ">
        <div class=" card col-sm-4" style="width: 18rem;">
            <img src="futbol.jpg" class="card-img-top img-fluid" alt="...">
            <div class="card-body ">
                <h5 class="card-title">{{$jugador->nombres}} {{$jugador->apellido_paterno}}</h5>
                <p class="card-text ">
                    <b>Posición: </b>{{$jugador->posicion}} <br>
                    <b>Pierna Habil: </b>{{$jugador->pierna_habil}} <br>
                    <b>Fecha de nacimiento: </b>{{$jugador->Fecha_nacimiento}} <br>
                    <b>Club Actual: </b>{{$jugador->club_actual}} <br>
                </p>
                <a href="{{route('inicio')}}" class="btn btn-outline-success btn-block">Salir</a>
            </div>
        </div>
    </div>
@endsection
