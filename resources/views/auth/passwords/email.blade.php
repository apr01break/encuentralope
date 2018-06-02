@extends('layouts.layout') @section('content')
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>Restablecer contraseña</h2>

        </div>
      </div>
    </div>
  </div>
</section>
<section id="blog-full-width">
  <div class="container">
    <div>
      <br><br><br>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

          <div class="col-md-6">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
              required> @if ($errors->has('email'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
              {{ __('Enviar nueva contraseña a correo') }}
            </button>
          </div>
        </div>
      </form>
    </div>


  </div>
</section>
@endsection