
<div class="btn-group">
  {{-- published --}}
  @if ((int) $course->status === \App\Course::PUBLISHED) {{-- Si el curso está publicado --}}
    <a href="{{ route('courses.detail', ['slug' => $course->slug]) }}" class="btn btn-course">
      <i class="fa fa-eye"></i> {{ __("Detalle") }}
    </a>
    <a href="{{ route('courses.edit', ['slug' => $course->slug]) }}" class="btn btn-warning text-white">
      <i class="fa fa-pencil"></i> {{ __("Editar curso") }}
    </a>
    @include('partials.courses.btn_forms.delete')
  {{-- end published --}}

  {{-- pending --}}
  @elseif((int) $course->status === \App\Course::PENDING) {{-- Si el curso está pendiente --}}
    <a href="#" class="btn btn-primary text-white">
      <i class="fa fa-history"></i> {{ __("Curso pendiente de revisión") }}
    </a>
    <a href="{{ route('courses.detail', ['slug' => $course->slug]) }}" class="btn btn-course">
      <i class="fa fa-eye"></i> {{ __("Detalle") }}
    </a>
    <a href="{{ route('courses.edit', ['slug' => $course->slug]) }}" class="btn btn-warning text-white">
      <i class="fa fa-pencil"></i> {{ __("Editar curso") }}
    </a>
    @include('partials.courses.btn_forms.delete')
  {{-- end pending --}}

  {{-- rejected --}}
  @else {{-- Si el curso está rechazado --}}
    <a href="#" class="btn btn-danger text-white">
      <i class="fa fa-pause"></i> {{ __("Curso rechazado") }}
    </a>
    @include('partials.courses.btn_forms.delete')
  @endif
  {{-- end rejected --}}
</div>