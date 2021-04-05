<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- favicon --}}
    {{-- script --}}
    
    {{-- estilos --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>


<body class="">
    

    {{-- header --}}
    {{-- nav --}}
    <div class="navbar navbar-expand-lg navbar-expand-md navbar-light"style="background-color: #e3f2fd;">        
        <div class="container col-lg-1 col-md-1 col-sm-12 col-12 d-flex justify-content-center">
            <a href="http://totalges.cl" class="navbar-brand">
                <span class="brand-text font-weight-light"><b>Escuelas Futbol</b></span>
            </a>
            <a href="{{route('inicio')}}" class="navbar-brand">
                <span class="fs-6 fw-light"><b>Inicio</b></span>
            </a>
        </div>
        
        <!-- Links de Navegacion Derecha -->
        <div class="container col-lg-3 col-md-3 col-sm-12 col-12 d-flex justify-content-center justify-content-start-lg">
            <ul class="navbar-nav">
                <li class="nav-item d-sm-inline-block ">
                    <a href="http://totalges.cl/home" class="btn btn-success">
                        Mi cuenta
                    </a>
                </li>
            </ul>
        </div>

    </div>

    @yield('content')

    {{-- footer --}}
    <footer class="mainfooter" style="background-color: #e3f2fd" role="contentinfo">
        <div class="footer-middle">
            <div ><br>
                <div class="section text-center row">
                <div class="col-md-3 col-sm-6">
                    <!--Primera Columna-->
                    <div class="footer-pad">
                    <h4>Sobre Nosotros</h4>
                    <p>Somos una plataforma orientada a la administración deportiva y financiera de escuelas o academias 
                        de fútbol.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!--Segunda Columna-->
                    <div class="footer-pad">
                    <h4>Información de Contacto</h4>
                    <p>Celular: +569 88292575</p>
                    <p>Correo Electronico: contacto@totalges.cl</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!--Tercera Columna-->
                    <div class="footer-pad">
                    <h4>Información de la compañia</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Politicas de privacidad</a></li>
                        <li><a href="#">Terminos y condiciones</a></li>
                        <li><a href="http://totalges.cl/contacto">Contactanos</a></li>
                        
                    </ul>
                    </div>
                </div>
                    <div class="col-md-3">
                        <h4>Redes Sociales</h4>
                        <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    
                        </ul>				
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 copy">
                        <p class="text-center">© Copyright 2021 - GIOM ASESORIAS.  Todos los derechos reservados.</p>
                    </div>
                </div>

            </div>
        </div>
        </footer>
    {{--   --}}
</body>

</html>