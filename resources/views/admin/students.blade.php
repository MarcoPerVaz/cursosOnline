
@extends('layouts.app')

@section('jumbotron')
  @include('partials.jumbotron', ['title' => "Administrar estudiantes", 'icon' => 'unlock-alt'])    
@endsection

@section('content')
  <div class="pl-5 pr-5">
    <students-list :labels="{{ json_encode ([
        'name'                => __("Nombre Estudiante"),
        'email'               => __("Email"),
        'role'               => __("Role"),
      ])}}" route="{{ route('admin.students_json') }}">
    </students-list>
  </div>
@endsection
