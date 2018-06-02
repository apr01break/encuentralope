@extends('layouts.layout') @section('content')
<script type="text/javascript" src="{{asset('slide.js')}}"></script>
<link rel="stylesheet" href="{{asset('slide.css')}}">
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>mochila de color oscuro</h2>
          <div class="portfolio-meta">
            <span>10 de abril de 2018</span>|
            <span> Chancay</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog-full-width">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="sidebar">
          
          <div class="author widget">
            <img class="img-responsive" src="{{asset('plantilla/images/author/author-bg.jpg')}}">
            <div class="author-body text-center">
              <div class="author-img">
                <img src="{{asset('plantilla/images/author/author.jpg')}}">
              </div>
              <div class="author-bio">
                <h3>Joel Martin Pumachagua Rosales</h3>
                <p>Chancay, Lima, Perú </p>
              </div>
            </div>
          </div>
          <ul class="social-share">
          <h4>Compartir esta publicación</h4>
          <li>
            <a href="#" class="Facebook">
              <i class="ion-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#" class="Twitter">
              <i class="ion-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#" class="Linkedin">
              <i class="ion-social-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="#" class="Google Plus">
              <i class="ion-social-googleplus"></i>
            </a>
          </li>

        </ul>


        </div>
      </div>
      <div class="col-md-8">
        <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
          <div class="blog-post-image">
            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:520px;overflow:hidden;visibility:hidden;">
              <!-- Loading Screen -->
              <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{asset('slide/img/spin.svg')}}" />
              </div>
              <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:520px;overflow:hidden;">
                <div data-p="170.00">
                  <img data-u="image" src="{{asset('slide/img/001.jpg')}}" />
                </div>
                <div data-p="170.00">
                  <img data-u="image" src="{{asset('slide/img/002.jpg')}}" />
                </div>
                <div data-p="170.00">
                  <img data-u="image" src="{{asset('slide/img/003.jpg')}}" />
                </div>
                <div data-p="170.00">
                  <img data-u="image" src="{{asset('slide/img/004.jpg')}}" />
                </div>
              </div>
              <!-- Bullet Navigator -->
              <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5"
                data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                  <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                  </svg>
                </div>
              </div>
              <!-- Arrow Navigator -->
              <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75"
                data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
              </div>
              <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75"
                data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                  <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
              </div>
            </div>
          </div>
          <div class="blog-content">
            <h2 class="blogpost-title">
              Mochila de universitario de color oscuro
            </h2>
            <div class="blog-meta">
              <span>10 de abril de 2018</span>
              <span>Chancay</span>
            </div>
            <p>Esta mochila la encontre en la calle Lorenzo Raviel cuadra 3 cuando estaba caminando, la vi tirada y nadie estaba al lado
          así que asumí que alguien la había olvidado . Si alguien conoce al dueño, por favor comunicarle. Hay cuadernos
          y folders dentro con trabajos monográficos.
            </p>
            <button  class="btn btn-dafault btn-details">Dejar un mensaje</button>
          </div>
        </article>
        
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  jssor_1_slider_init();
</script>
@endsection