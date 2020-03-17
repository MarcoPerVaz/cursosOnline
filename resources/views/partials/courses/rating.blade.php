
<div>
  <ul class="list-inline">
    {{-- Opción 1 --}}
    {{-- <li class="list-inline-item"><i class="fa fa-star {{ $course->rating >= 1 ? 'yellow' : '' }}"></i></li>
    <li class="list-inline-item"><i class="fa fa-star {{ $course->rating >= 2 ? 'yellow' : '' }}"></i></li>
    <li class="list-inline-item"><i class="fa fa-star {{ $course->rating >= 3 ? 'yellow' : '' }}"></i></li>
    <li class="list-inline-item"><i class="fa fa-star {{ $course->rating >= 4 ? 'yellow' : '' }}"></i></li>
    <li class="list-inline-item"><i class="fa fa-star {{ $course->rating >= 5 ? 'yellow' : '' }}"></i></li> --}}

    {{-- Opción 2 --}}
    <li class="list-inline-item"><i class="fa fa-star {{ $rating >= 1 ? 'yellow' : '' }}"></i></li>
    <li class="list-inline-item"><i class="fa fa-star {{ $rating >= 2 ? 'yellow' : '' }}"></i></li>
    <li class="list-inline-item"><i class="fa fa-star {{ $rating >= 3 ? 'yellow' : '' }}"></i></li>
    <li class="list-inline-item"><i class="fa fa-star {{ $rating >= 4 ? 'yellow' : '' }}"></i></li>
    <li class="list-inline-item"><i class="fa fa-star {{ $rating >= 5 ? 'yellow' : '' }}"></i></li>
  </ul>
</div>