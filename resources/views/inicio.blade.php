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
            <a href="{{url('/objetos_encontrados')}}">Ver más -></a>
        </div>
        <div class="row">
            @foreach($pubs_enc as $pub)
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <a href="{{route('publicar.show',$pub->id)}}"> <img src="data:image/jpeg;base64,{{base64_encode($pub->imagenes[0]->foto)}}" height="270" width="360" alt="this is a title" ></a>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="{{url('publicar.show',$pub->id)}}">
                      {{$pub->titulo}}
                    </a>
                    </h4>
                    <p>
                        {{date('d M,Y', strtotime($pub->created_at))}} en Huacho
                    </p>
                    </figcaption>
                </figure>
            </div>
            @endforeach
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
            @foreach($pubs_per as $pub)
            <div class="col-sm-4 col-xs-12">
                <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <a href="{{route('publicar.show',$pub->id)}}"> <img src="data:image/jpeg;base64,{{base64_encode($pub->imagenes[0]->foto)}}" height="270" width="360" alt="this is a title" ></a>
                    </div>
                    <figcaption>
                    <h4>
                    <a href="{{route('publicar.show',$pub->id)}}">
                    {{$pub->titulo}}
                    </a>
                    </h4>
                    <p>
                    {{date('d M,Y', strtotime($pub->created_at))}} en Huacho
                    </p>
                    </figcaption>
                </figure>
            </div>
            @endforeach
            
        </div>
        
    </div>
</section>
@endsection