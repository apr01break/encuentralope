@extends('layouts.layout') @section('content')
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>Objetos perdidos</h2>
          <ol class="breadcrumb">
            <li>
              <a href="{{url('/')}}">
                <i class="ion-ios-home"></i>
                Inicio
              </a>
            </li>
            <li class="active">Objetos perdidos</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <p class="wow fadeInDown" data-wow-delay=".3s">
              Personas perdieron sus pertenencias y buscan recuperarlo. Si encuentras algún objeto de estos, por favor comunícate con la persona que hizo la publicación inmediatamente.
            </p>
        </div>
        <div class="row">
        
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <a href="#"> <img src="{{('plantilla/images/portfolio/selladora2.jpg')}}" class="img-responsive" alt="this is a title" ></a>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                      Selladora para ...
                    </a>
                    </h4>
                    <p>
                        7 de abril de 2018 en Huaraz
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{('plantilla/images/portfolio/casaca.png')}}" class="img-responsive" alt="this is a title" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Casaca con marca en el brazo derecho
                    </a>
                    </h4>
                    <p>
                        4 de mayo de 2018 en Trujillo
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{('plantilla/images/portfolio/barquito.jpg')}}" class="img-responsive" alt="" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Barquito de madera 
                    </a>
                    </h4>
                    <p>
                        21 de abril de 2018 en Lima
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{('plantilla/images/portfolio/selladora.jpg')}}" class="img-responsive" alt="" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Selladora 
                    </a>
                    </h4>
                    <p>
                        19 de mayo de 2018 en Huacho
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{('plantilla/images/portfolio/perro3.jpg')}}" class="img-responsive" alt="" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Perro pequeño
                    </a>
                    </h4>
                    <p>
                        1 de enero de 2018 en Huaura
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{('plantilla/images/portfolio/perro2.jpg')}}" class="img-responsive" alt="" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Perrón
                    </a>
                    </h4>
                    <p>
                        28 de febrero de 2018 en Barranca
                    </p>
                    </figcaption>
                </figure>
            </div>
            
        </div>
        
    </div>
</section>
@endsection