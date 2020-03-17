
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
          <div class="card">
            <div class="card-header">
              {{ __("Administrar los curso que imparto") }}
            </div>
            <div class="card-body">
              <a href="{{ route('teacher.courses') }}" class="btn btn-secondary btn-block">
                <i class="fa fa-leanpub"></i>{{ __("Administrar ahora") }}
              </a>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              {{ __("Mis estudiantes") }}
            </div>
            <div class="card-body">
              <table class="table table-striped table-bordered nowrap" cellspacing="0" id="students-table">
                <thead>
                  <tr>
                    <th>{{ __("ID") }}</th>
                    <th>{{ __("Nombre") }}</th>
                    <th>{{ __("Email") }}</th>
                    <th>{{ __("Cursos") }}</th>
                    <th>{{ __("Acciones") }}</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        @endif
      </div>
    </div>
  </div>
  @include('partials.modal')
@endsection

@push('scripts')
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script>
    let dt; 
    let modal = jQuery('#appModal');
    jQuery(document).ready(function() {
      dt = jQuery('#students-table').DataTable({
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50, 75, 100],
        processing: true,
        serverSide: true,
        ajax: '{!! route('teacher.students') !!}',
        language: {
          url: "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json" /* Para traducir datatables a español */
        },
        columns: [
          {data: 'user.id'},
          {data: 'user.name'},
          {data: 'user.email'},
          {data: 'courses_formatted'},
          {data: 'actios'},
        ]
      });
    });
  </script>
@endpush