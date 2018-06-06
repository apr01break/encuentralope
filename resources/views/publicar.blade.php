@extends('layouts.layout') @section('content')
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>publicar</h2>
          <ol class="breadcrumb">
            <li>
              <a href="{{url('/')}}">
                <i class="ion-ios-home"></i>
                Inicio
              </a>
            </li>
            <li class="active">Publicar</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="block">
          <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">REALICE UNA PUBLICACIÓN</h2>
          <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
            Complete todos los campos
          </p>
          <div class="contact-form">
            <form id="form" method="post" action="{{route('publicar.store')}}"  enctype="multipart/form-data">
            @csrf
              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <select name="categoria_id" id="tipo" class="form-control" required>
                  <option value="">Categoría (seleccionar)</option>
                  @foreach($categorias as $cat)
                  
                  <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                  @endforeach
                  
                </select>
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <select name="subcategoria_id" id="tipo" class="form-control" required>
                  <option value="">Sub categoría (seleccionar)</option>
                  @foreach($subcategorias as $subcat)
                  <option data="{{$subcat->categoria_id}}" value="{{$subcat->id}}" hidden>{{$subcat->nombre}}</option>
                  @endforeach
                  
                </select>
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">
                <select name="tipo" id="tipo" class="form-control" required>
                  <option value="">¿Qué sucedió? (seleccionar)</option>
                  <option value="Encontré un objeto">Encontré un objeto</option>
                  <option value="Perdí un objeto">Perdí un objeto</option>
                </select>
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".4s">
                <input type="text" placeholder="Título" class="form-control" name="titulo" required id="titulo">
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                <textarea rows="6" placeholder="Descripción" class="form-control" name="descripcion" required id="descripcion"></textarea>
              </div>

              <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".6s">
                <input type="file" name="fotos[]" multiple required>
              </div>

              <div id="submit" class="wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".7s">
                <input type="submit" class="btn btn-default btn-send" value="PUBLICAR">
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map-area">
          <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s">¿Dónde ocurrió esto?</h2>
          <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
            Señale la ubicación exacta donde encontró o perdió el objeto.

          </p>
          <div class="map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15660.021948463627!2d-77.6020568!3d-11.11296855!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1526959888358"
              width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
   
</section>
@endsection
@section('script')
<script type="text/javascript">
	$(function () {
    $("select[name=categoria_id]").on('change',function(){
      if($(this).val()!=""){
        $("select[name=subcategoria_id] option").attr('hidden',true);
        $("select[name=subcategoria_id] option[data="+$(this).val()+"]").attr('hidden',false);
      }
		});
    $("#fodrm").submit(function(){
      event.preventDefault();
      console.log($(this).serialize());
    });
    
  });
</script>
@endsection
