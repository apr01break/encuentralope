@extends('layouts.layout') @section('content')
<section class="global-page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h2>registrarse</h2>

        </div>
      </div>
    </div>
  </div>
</section>
<section id="blog-full-width">
  <div class="container">
    <div>
      <br>
      <br>
    </div>
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
							<label for="nombres" class="col-sm-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

							<div class="col-md-6">
								<input id="nombres" type="nombres" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" name="nombres" value="{{ old('nombres') }}"
								  required autofocus> @if ($errors->has('nombres'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('nombres') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="apellidos" class="col-sm-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

							<div class="col-md-6">
								<input id="apellidos" type="apellidos" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ old('apellidos') }}"
								  required> @if ($errors->has('apellidos'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('apellidos') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="edad" class="col-sm-4 col-form-label text-md-right">{{ __('Edad') }}</label>

							<div class="col-md-6">
								<input id="edad" type="number" class="form-control{{ $errors->has('edad') ? ' is-invalid' : '' }}" name="edad" value="{{ old('edad') }}"
								  required> @if ($errors->has('edad'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('edad') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group row">
							<label for="telefono" class="col-sm-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

							<div class="col-md-6">
								<input id="telefono" type="number" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" name="telefono" value="{{ old('telefono') }}"
								  required> @if ($errors->has('telefono'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('telefono') }}</strong>
								</span>
								@endif
							</div>
						</div>

            <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                  required> @if ($errors->has('email'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                  required> @if ($errors->has('password'))
                <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
                </button>
              </div>
            </div>
          </form>
    </div>
  </div>
</section>
@endsection