
<div class="card card-01">
  <img src="{{ $course->pathAttachment() }}" alt="{{ $course->name }}" class="card-img-top">
  <div class="card-body">
    <span class="badge-box"><i class="fa fa-check"></i></span>
    <h4 class="card-title">{{ $course->name }}</h4>
    <hr>
    <div class="row justify-content-center">
      @include('partials.courses.rating', ['rating' => $course->custom_rating])
    </div>
    <hr>
    <span class="badge badge-danger badge-cat">{{ $course->category->name }}</span>
    <p class="card-text">
      {{ str_limit($course->description, 100) }}
    </p>
    <a href="{{ route('courses.detail', $course->slug) }}" class="btn btn-course btn-block">{{ __("Más información") }}</a>
  </div>
</div>

{{-- Notas:
        *$course->pathAttachment() es una función creada en el modelo Course
        *La función str_limit(variableaCortar, tamaño, simboloAColocar)
          *Ejemplo: {{ str_limit($course->description, 100, '---') }}
--}}