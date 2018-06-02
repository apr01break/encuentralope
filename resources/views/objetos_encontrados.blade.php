@extends('layouts.layout') @section('content')
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>Objetos encontrados</h2>
          <ol class="breadcrumb">
            <li>
              <a href="{{url('/')}}">
                <i class="ion-ios-home"></i>
                Inicio
              </a>
            </li>
            <li class="active">Objetos encontrados</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".2s">Objetos encontrados</h1>
            <p class="wow fadeInDown" data-wow-delay=".3s">
              Personas publicaron objetos que encontraron y necesitan conocer su dueño. Si alguno de los objetos es tuyo, comunícate con la persona que hizo la publicación inmediatamente.
            </p>
            
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <a href="{{url('/publicacion')}}"> <img src="{{asset('plantilla/images/portfolio/mochila.jpg')}}" class="img-responsive" alt="this is a title" ></a>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="{{url('/publicacion')}}">
                      Mochila de colegio
                    </a>
                    </h4>
                    <p>
                        7 de abril de 2018 en Huacho
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/celular.jpg')}}" class="img-responsive" alt="this is a title" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Celular Huawei
                    </a>
                    </h4>
                    <p>
                        4 de mayo de 2018 en Huaura
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/collar.jpg')}}" class="img-responsive" alt="" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Collar de aros
                    </a>
                    </h4>
                    <p>
                        21 de abril de 2018 en Chancay
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/mochilav.jpg')}}" class="img-responsive" alt="" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Mochila verde de UBJFSC
                    </a>
                    </h4>
                    <p>
                        19 de mayo de 2018 en Lima
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/llave.jpg')}}" class="img-responsive" alt="" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        LLavero de miku con 3 llaves
                    </a>
                    </h4>
                    <p>
                        1 de enero de 2018 en Huacho
                    </p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay="1200ms">
                    <div class="img-wrapper">
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/cargador.jpg')}}" class="img-responsive" alt="" ></a>
                        
                    </div>
                    <figcaption>
                    <h4>
                    <a href="#">
                        Cargador Lenovo
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