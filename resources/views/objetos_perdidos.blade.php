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
            @foreach($pubs as $pub)
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