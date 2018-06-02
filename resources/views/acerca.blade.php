@extends('layouts.layout')

@section('content')
<section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Acerca de nosotros</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="{{url('/')}}">
                                        <i class="ion-ios-home"></i>
                                        Inicio
                                    </a>
                                </li>
                                <li class="active">Acerca de</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="{{ asset('plantilla/images/about/team.jpg')}}" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms">Simplemente Dream Team</h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        Somos un grupo de estudiantes de Ingeniería Informática 9no ciclo de la Universidad Nacional José Faustino Sánchez Carrión.
                    </p>
                    <p  class="wow fadeInUp" data-wow-delay=".7s" data-wow-duration="500ms">
                        
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center">Conoce al equipo</h2>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <img src="{{ asset('plantilla/images/team/alonso.png')}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Alonso Pumachagua Rosales</h3>
                    <p class="team_designation">CEO, Project Manager</p>
                    <p class="team_text">Descripción</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <div class="team-img">
                        <img src="{{ asset('plantilla/images/team/joel.png')}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Joel Padilla Noriega</h3>
                    <p class="team_designation">Administrador de base de datos</p>
                    <p class="team_text">Descripción</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <div class="team-img">
                        <img src="{{ asset('plantilla/images/team/carlos.png')}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Carlos Junco Jáuregui</h3>
                    <p class="team_designation">Ingeniero minero</p>
                    <p class="team_text">Descripción</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <div class="team-img">
                        <img src="{{ asset('plantilla/images/team/harold.png')}}" class="team-pic" alt="">
                    </div>
                    <h3 class="team_name">Harold Rodriguez Mendoza</h3>
                    <p class="team_designation">Pet</p>
                    <p class="team_text">Descripción</p>
                    <p class="social-icons">
                        <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                        <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection