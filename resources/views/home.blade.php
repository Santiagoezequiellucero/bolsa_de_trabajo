@extends('layout.plantilla')

@section('title','Inicio')
    
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
            <div class="text-center">
                <br>
                <h1 class="fs-1 fw-light">TOTALGES</h1> 
                <img src="futbol.jpg">
                                
            </div>
        </div>
    </div>
    <br>
    <div class="text-center">        
        <h4 class="fw-light">Registrate con nosotros </h4> 
        <br>
    </div>
    <div class="container btn-group ">
        <a href="{{route('jugadores')}}" class="btn btn-success btn-lg">
            Jugadores
        </a> 
        <a href="{{route('entrenadores')}}" class="btn btn-success btn-lg">
            Entrenadores
        </a>
        <a href="{{route('agencias')}}" class="btn btn-success btn-lg">
            Agencias
        </a>
        <a href="{{route('clubes')}}" class="btn btn-success btn-lg">
            Clubes
        </a>        
    </div>     
</div>
<br>
<br>
<br>
<br>
<br>
@endsection  
