
@extends('layouts.app')

@section('jumbotron')
  @include('partials.jumbotron', ['title' => 'Dar de alta un nuevo curso', 'icon' => 'edit'])
@endsection

@section('content')
  <div class="pl-5 pr-5">
    <form action="{{ ! $course->id ? route('courses.store') : route('courses.update', ['slug' => $course->slug]) }}" 
      method="post" enctype="multipart/form-data" novalidate>

      @if ($course->id)
        @method('PUT')
      @endif

      @csrf

      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              {{ __("Información del curso") }}
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">
                  {{ __("Nombre del curso") }}
                </label>
                <div class="col-md-6">
                  <input type="text" 
                      class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" 
                      name="name" id="name"
                      value="{{ old('name') ?: $course->name }}"
                      requiered autofocus>

                      @if ($errors->has('name'))
                        <span class="invalid-feedback">
                          <strong>{{ $errors->first('name') }}</strong></span>  
                      @endif

                </div>
              </div>
              {{-- levels --}}
              <div class="form-group row">
                <label for="level_id" class="col-md-4 col-form-label text-md-right">
                  {{ __("Nivel del curso") }}
                </label>
                <div class="col-md-6">
                  <select class="form-control" name="level_id" id="level_id">
                    @foreach (\App\Level::pluck('name', 'id') as $id => $level)
                      <option value="{{ $id }}" {{ (int) old('level_id') === $id || $course->level_id === $id ? 'selected' : '' }}>
                        {{ $level }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
              {{-- End levels --}}

              {{-- categories --}}
              <div class="form-group row">
                <label for="category_id" class="col-md-4 col-form-label text-md-right">
                  {{ __("Categoría del curso") }}
                </label>
                <div class="col-md-6">
                  <select class="form-control" name="category_id" id="category_id">
                    @foreach (\App\Category::groupBy('name')->pluck('name', 'id') as $id => $category)
                      <option value="{{ $id }}" {{ (int) old('category_id') === $id || $course->category_id === $id ? 'selected' : '' }}>
                        {{ $category }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
              {{-- end categories --}}

              {{-- upload image --}}
              <div class="form-group ml-3 mr-2">
                <div class="col-md-6 offset-4">
                  <input type="file" 
                      class="custom-file-input{{ $errors->has('picture') ? ' is-invalid' : '' }}"
                      id="picture" name="picture">
                  <label for="picture" class="custom-file-label">
                    {{ __("Escoge una imagen para tu curso") }}
                  </label>
                </div>
              </div>
              {{-- end upload Image --}}

              {{-- description --}}
              <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">
                  {{ __("Descripción del curso") }}
                </label>
                <div class="col-md-6">
                  <textarea class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" 
                        name="description" id="description" rows="8" required>
                  {{ old('description') ?: $course->description }}
                  </textarea>
                  @if ($errors->has('description'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('description') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              {{-- end description --}}

            </div>
          </div>
        </div>
        {{-- requirements --}}
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              {{ __("Requisitos para tomar el curso") }}
            </div>
            <div class="card-body">
              {{-- requirement 1 --}}
              <div class="form-group row">
                <label for="requirement1" class="col-md-4 col-form-label text-md-right">
                  {{ __("Requerimiento 1") }}
                </label>
                <div class="col-md-6">
                  <input class="form-control{{ $errors->has('requirements.0') ? ' is-invalid' : '' }}" 
                      type="text" id="requirement1" name="requirements[]" 
                      value="{{ old('requirements.0') ? old('requirements.0') : ($course->requirements_count > 0 ? $course->requirements[0]->requirement : '' )}}">
                  @if ($errors->has('requirements.0'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('requirements.0') }}</strong>
                    </span>
                  @endif
                </div>
                @if ($course->requirements_count > 0)
                    <input type="hidden" name="requirement_id0" value="{{ $course->requirements[0]->id }}">
                @endif
              </div>
              {{-- end requirement 1 --}}

              {{-- requirement 2 --}}
              <div class="form-group row">
                <label for="requirement2" class="col-md-4 col-form-label text-md-right">
                  {{ __("Requerimiento 2") }}
                </label>
                <div class="col-md-6">
                  <input class="form-control{{ $errors->has('requirements.1') ? ' is-invalid' : '' }}" 
                      type="text" id="requirement2" name="requirements[]" 
                      value="{{ old('requirements.1') ? old('requirements.1') : ($course->requirements_count > 1 ? $course->requirements[1]->requirement : '' )}}">
                  @if ($errors->has('requirements.1'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('requirements.1') }}</strong>
                    </span>
                  @endif
                </div>
                @if ($course->requirements_count > 1)
                    <input type="hidden" name="requirement_id1" value="{{ $course->requirements[1]->id }}">
                @endif
              </div>
              {{-- end requirement 2 --}}
            </div>
          </div>
        </div>
        {{-- end requirements --}}

        {{-- Goals --}}
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              {{ __("¿Qué conseguirá el estudiante al finalizar este curso?") }}
            </div>
            <div class="card-body">
              {{-- goal 1 --}}
              <div class="form-group row">
                <label for="goal1" class="col-md-4 col-form-label text-md-right">
                  {{ __("Meta 1") }}
                </label>
                <div class="col-md-6">
                  <input class="form-control{{ $errors->has('goals.0') ? ' is-invalid' : '' }}" 
                      type="text" id="goal1" name="goals[]" 
                      value="{{ old('goals.0') ? old('goals.0') : ($course->goals_count > 0 ? $course->goals[0]->goal : '' )}}">
                  @if ($errors->has('goals.0'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('goals.0') }}</strong>
                    </span>
                  @endif
                </div>
                @if ($course->goals_count > 0)
                    <input type="hidden" name="goal_id0" value="{{ $course->goals[0]->id }}">
                @endif
              </div>
              {{-- end goal 1 --}}

              {{-- goal 2 --}}
              <div class="form-group row">
                <label for="goal2" class="col-md-4 col-form-label text-md-right">
                  {{ __("Meta 2") }}
                </label>
                <div class="col-md-6">
                  <input class="form-control{{ $errors->has('goals.1') ? ' is-invalid' : '' }}" 
                      type="text" id="goal2" name="goals[]" 
                      value="{{ old('goals.1') ? old('goals.1') : ($course->goals_count > 1 ? $course->goals[1]->goal : '' )}}">
                  @if ($errors->has('goals.1'))
                    <span class="invalid-feedback">
                      <strong>{{ $errors->first('goals.1') }}</strong>
                    </span>
                  @endif
                </div>
                @if ($course->goals_count > 1)
                    <input type="hidden" name="goal_id1" value="{{ $course->goals[1]->id }}">
                @endif
              </div>
              {{-- end goal 2 --}}
            </div>
          </div>
        </div>
        {{-- end goals --}}

        {{-- button --}}
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <div class="form-group row mb-0">
                <div class="col-md-4 offset-5">
                  <button type="submit" class="btn btn-danger" name="revision">
                    {{ __($btnText) }}
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- end button --}}
      </div>

    </form>
  </div>
@endsection