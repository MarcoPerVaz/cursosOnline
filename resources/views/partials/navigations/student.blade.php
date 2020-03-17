
<li><a href="{{ route('profile.index') }}" class="nav-link">{{ __("Mi perfil") }}</a></li>
<li><a href="#" class="nav-link">{{ __("Mis suscripciones") }}</a></li>
<li><a href="{{ route('invoices.admin') }}" class="nav-link">{{ __("Mis facturas") }}</a></li>
<li><a href="{{ route('courses.suscribed') }}" class="nav-link">{{ __("Mis cursos") }}</a></li>

{{-- logout --}}
@include('partials.navigations.logged')
{{-- end logout --}}