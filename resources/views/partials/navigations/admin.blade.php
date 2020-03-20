
<li><a href="{{ route('admin.courses') }}" class="nav-link">{{ __("Administrar cursos") }}</a></li>
<li><a href="#" class="nav-link">{{ __("Administrar estudiantes") }}</a></li>
<li><a href="#" class="nav-link">{{ __("Administrar profesores") }}</a></li>

{{-- logout --}}
@include('partials.navigations.logged')
{{-- end logout --}}