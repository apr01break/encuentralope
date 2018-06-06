<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="favicon.ico">
        <title>Encuentralo.pe</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{ asset('plantilla/plugins/bootstrap/bootstrap.min.css')}}">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{ asset('plantilla/plugins/ionicons/ionicons.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('plantilla/plugins/animate-css/animate.css')}}">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{ asset('plantilla/plugins/slider/slider.css')}}">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{ asset('plantilla/plugins/owl-carousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('plantilla/plugins/owl-carousel/owl.theme.css')}}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{ asset('plantilla/plugins/facncybox/jquery.fancybox.css')}}">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{ asset('plantilla/css/style.css')}}">
    </head>
    <body>


        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="{{url('/')}}" >
                            <img src="{{ asset('plantilla/images/loogg.png')}}" alt="">
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{url('/')}}" >Inicio</a>
                            </li>
                            <li><a href="{{url('/publicar')}}">Publicar</a></li>
                            <li><a href="{{url('/objetos_encontrados')}}">Objetos Encontrados</a></li>
                            <li><a href="{{url('/objetos_perdidos')}}">Objetos perdidos</a></li>
                            <li><a href="{{url('/acerca')}}">Acerca de</a></li>
                            
                            
                            
                            @if (Route::has('login'))
                                
                                @auth
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                @else
                                <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
                                @endauth
                              
                            @endif
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        @yield('content')

            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Diseñado y desarrollado por <a href="https://www.facebook.com/hrold.rodriguezmendoza" target="_blank">Harold Rodriguez Mendoza</a>. <br> 
                            
                        </p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="https://www.facebook.com/joel.padilla.noriega" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/joel.padilla.noriega" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/joel.padilla.noriega" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/joel.padilla.noriega" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="{{ asset('plantilla/plugins/jQurey/jquery.min.js')}}"></script>
	<!-- Form Validation -->
    <script src="{{ asset('plantilla/plugins/form-validation/jquery.form.js')}}"></script> 
    <script src="{{ asset('plantilla/plugins/form-validation/jquery.validate.min.js')}}"></script>
	<!-- owl carouserl js -->
	<script src="{{ asset('plantilla/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset('plantilla/plugins/bootstrap/bootstrap.min.js')}}"></script>
	<!-- wow js -->
	<script src="{{ asset('plantilla/plugins/wow-js/wow.min.js')}}"></script>
	<!-- slider js -->
	<script src="{{ asset('plantilla/plugins/slider/slider.js')}}"></script>
	<!-- Fancybox -->
	<script src="{{ asset('plantilla/plugins/facncybox/jquery.fancybox.js')}}"></script>
	<!-- template main js -->
	<script src="{{ asset('plantilla/js/main.js')}}"></script>
    @yield('script')
 	</body>
</html>