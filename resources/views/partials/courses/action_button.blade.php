
<div class="col-2">
  @auth {{-- Si pasa auth --}}
    @can('opt_for_course', $course) {{-- Si pasa la política opt_for_course --}}
      @can('subscribe', \App\Course::class) {{-- Si pasa la otra política subscribe --}}
        <a href="{{ route('subscriptions.plans') }}" class="btn btn-subscribe btn-bottom btn-block">
          <i class="fa fa-bolt"> {{ __("Subscribirme") }}</i>
        </a>
      @else {{-- Si no pasa subscribe --}}
        @can('inscribe', $course) {{-- Si pasa la política inscribe --}}
          <a href="{{ route('courses.inscribe', ['slug' => $course->slug]) }}" class="btn btn-subscribe btn-bottom btn-block">
            <i class="fa fa-bolt"> {{ __("Inscribirme") }}</i>
          </a>
        @else {{-- Si no pasa inscribe --}}
          <a href="#" class="btn btn-subscribe btn-bottom btn-block">
            <i class="fa fa-bolt"> {{ __("Inscrito") }}</i>
          </a>
        @endcan
      @endcan
    @else {{-- Si no pasa opt_for_course --}}
      <a href="#" class="btn btn-subscribe btn-bottom btn-block">
        <i class="fa fa-user"> {{ __("Soy autor") }}</i>
      </a>
    @endcan
  @else {{-- Si no pasa auth --}}
    <a href="{{ route('login') }}" class="btn btn-subscribe btn-bottom btn-block">
      <i class="fa fa-bolt"> {{ __("Acceder") }}</i>
    </a>
  @endauth
</div>