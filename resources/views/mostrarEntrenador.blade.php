@extends('layout.plantilla')

@section('title','Perfil')
    
@section('content')
<br>
    <div class="text-center">
        <h1 class="fs-1 fw-light"><center>Mi perfil</center> </h1>
        <a href="{{route('editarEntrenador')}}" class="navbar-brand">
            <h4 class="fs-6 fw-light" style="color: black">Editar perfil</h4>
        </a>
    </div>
@endsection