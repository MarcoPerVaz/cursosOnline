
@component('mail::message')

# {{ __("Curso Rechazado") }}

{{ __("Tu curso :course no ha sido aprobado en la plataforma", ['course' => $course->name]) }}
<img src="{{ url('storage/courses/' . $course->picture) }}" alt="{{ $course->name }}" class="img-responsive">

@component('mail::button', ['url' => url('/')])
  {{ __("Ir a la plataforma") }}
@endcomponent

{{ __("Gracias") }},
<br>
{{ config('app.name') }}

@endcomponent