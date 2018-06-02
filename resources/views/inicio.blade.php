@extends('layouts.layout') @section('content')
<section id="hero-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="block wow fadeInUp" data-wow-delay=".3s">
          <!-- Slider -->
          <section class="cd-intro">
            <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">

              <span class="cd-words-wrapper">
                <b class="is-visible">ENCUENTRA LO QUE PERDISTE</b>
                <b>DEVUELVE LO QUE ENCONTRASTE</b>

              </span>
            </h1>
          </section>
          <!-- cd-intro -->
          <!-- /.slider -->
          <h2 class="wow fadeInUp animated" data-wow-delay=".5s">
            cientos de personas notificaron haber perdido y encontrado pertenencias.
          </h2>
          <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works"
            data-section="#works">VER PUBLICACIONES</a>
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
            <a href="{{url('/objetos_perdidos')}}">Ver más -></a>
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

<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".2s">Objetos perdidos</h1>
            <p class="wow fadeInDown" data-wow-delay=".3s">
              Personas perdieron sus pertenencias y buscan recuperarlo. Si encuentras algún objeto de estos, por favor comunícate con la persona que hizo la publicación inmediatamente.
            </p>
            <a href="{{url('/objetos_perdidos')}}">Ver más -></a>
        </div>
        <div class="row">
        
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <a href="#"> <img src="{{asset('plantilla/images/portfolio/selladora2.jpg')}}" class="img-responsive" alt="this is a title" ></a>
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
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/casaca.png')}}" class="img-responsive" alt="this is a title" ></a>
                        
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
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/barquito.jpg')}}" class="img-responsive" alt="" ></a>
                        
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
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/selladora.jpg')}}" class="img-responsive" alt="" ></a>
                        
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
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/perro3.jpg')}}" class="img-responsive" alt="" ></a>
                        
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
                    <a href="#"><img src="{{asset('plantilla/images/portfolio/perro2.jpg')}}" class="img-responsive" alt="" ></a>
                        
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