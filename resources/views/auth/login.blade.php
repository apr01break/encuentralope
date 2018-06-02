@extends('layouts.layout') @section('content')
<section class="global-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h2>Iniciar sesión</h2>

				</div>
			</div>
		</div>
	</div>
</section>
<section id="blog-full-width">
	<div class="container">
	<div><br><br><br></div>
			<div class="col-md-2">

			</div>
			<div class="col-md-8">
				<div class="block">
				<form method="POST" action="{{ route('login') }}">
						@csrf

						<div class="form-group row">
							<label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Correo') }}</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
								  required autofocus> @if ($errors->has('email'))
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
						<div><br></div>
						<div class="form-group row mb-0">
							<div class="col-md-8 offset-md-4">
								<button type="submit" class="btn btn-primary">
									{{ __('Iniciar sesión') }}
								</button>

								<a class="btn btn-link" href="{{ route('password.request') }}">
									{{ __('¿Olvidó su contraseña?') }}
								</a>
							</div>
						</div>
					</form>
					
				</div>
			
		</div>
	</div>
</section>

@endsection