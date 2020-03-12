
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Crear una Policy para mostrar de forma dinámica el botón de inicio del curso</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
 <li>
   Crear la Policy <code>CoursePolicy</code>
   <pre>php artisan make:policy CoursePolicy</pre>
   Crear la Policy unida a un modelo <code>CoursePolicy </code>unido al modelo <code>Course</code>
   <pre>php artisan make:policy CoursePolicy --model=Course</pre>
 </li>
  <li>
    Edición del archivo <code>app/Providers/AuthServiceProvider</code>
    <br>
    <em>*Se registra la Policy nueva</em>
    <br>
    <em>*No olvidar importar las clases <code>use App\Course;</code> y <code>use App\Policies\CoursePolicy;</code></em>
  </li>
  <li>
    Edición de la Policy <code>app/Policies/CoursePolicy.php</code>
    <br>
    <em>*Se borran todas las funciones que incluía el comando
      <code>php artisan make:policy CoursePolicy --model=Course</code> ya que se harán desde cero</em>
    <ul>
      <li>Creación y edición de la función <code>opt_for_course(User $user, Course $course)</code></li>
      <li>Creación y edición de la función <code>subscribe(User $user)</code></li>
      <li>Creación y edición de la función <code>inscribe(User $user, Course $course)</code></li>
      <em>
        *No olvidar importar los modelos <code>use App\User;</code>, <code>use App\Course;</code> y 
        <code>use App\Role;</code>
      </em>
    </ul>
  </li>
  <li>Edición de la vista parcial <code>resources/views/partials/courses/jumbotron.blade.php</code></li>
  <li>Creación y edición de la vista parcial <code>resources/views/partials/courses/action_button.blade.php</code></li>
  <li>
    Edición del modelo <code>app/User</code>
    <br>
    <em>*No olvidar importar la clase <code>use Laravel\Cashier\Billable;</code></em>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em></em>
  <!-- End notes -->