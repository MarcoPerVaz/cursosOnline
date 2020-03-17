
@extends('layouts.app')

@section('jumbotron')
  @include('partials.jumbotron', ['title' => 'Configurar tu perfil', 'icon' => 'user-circle'])
@endsection

@push('styles')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endpush

@section('content')
  <div class="pl-5 pr-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            {{ __("Actualiza tus datos") }}
          </div>
          <div class="card-body">
            <form action="{{ route('profile.update') }}" method="POST" novalidate>
              @csrf
              @method('PUT') {{-- Para que el navegador entienda ya que no existe el método Http PUT --}}
              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">
                  {{ __("Correo electrónico") }}
                </label>
                <div class="col-md-6">
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                         id="email" type="email" name="email" value="{{ old('email') ?: $user->email }}" readonly>
                  @if ($errors->has('email'))
                   <span class="invalid-feedback">
                     <strong>{{ $errors->first('email') }}</strong>
                   </span>
                  @endif
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">
                  {{ __("Contraseña") }}
                </label>
                <div class="col-md-6">
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                         type="password" name="password" id="password" required>
                 @if ($errors->has('password'))
                   <span class="invalid-feedback">
                     <strong>{{ $errors->first('password') }}</strong>
                   </span>
                 @endif 
                </div>
              </div>
              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                  {{ __("Confirma la contraseña") }}
                </label>
                <div class="col-md-6">
                  <input class="form-control"
                         type="password" name="password_confirmation" id="password-confirm" required>
                </div>
              </div>
              <div class="form-group mb-0 row">
                <div class="col-md-8 offset-md-4">
                  <button class="btn btn-primary" type="submit">
                    {{ __("Actualizar datos") }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>

        @if (! $user->teacher) {{-- No es profesor --}}
          <div class="card">
            <div class="card-header">
              {{ __("Convertirme en profesor de la plataforma") }}
            </div>
            <div class="card-body">
              <form action="{{ route('solicitude.teacher') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-primary btn-block">
                  <i class="fa fa-graduation-cap"></i> {{ __("Solicitar") }}
                </button>
              </form>
            </div>
          </div>
        @else {{-- Si es profesor --}}
          si lo es
        @endif
      </div>
    </div>
  </div>
@endsection