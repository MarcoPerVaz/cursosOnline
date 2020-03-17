
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Formulario con JQuery para añadir una reseña al curso</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
 <li>
   Edición del archivo de rutas <code>routes/web.php</code>
   <br>
   <em>*Se creo el grupo del middleware auth</em>
  </li>
  <li>
    Edición del controlador <code>app/Http/Controllers/CourseController.php</code>
    <ul>
      <li>Creación de la función <code>public function addReview()</code></li>
    </ul>
  </li>
  <li>Creación y edición de la vista parcial <code>resources/views/partials/courses/form_review.blade.php</code></li>
  <li>Edición de la vista <code>resources/views/courses/detail.blade.php</code></li>
  <li>
    Edición del archivo de Policies <code>app/Policies/CoursePolicy.php</code>
    <ul>
      <li>Creación y edición de la función <code>public function review(User $user, Course $course)</code></li>
    </ul>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em>
    *Hay un detalle en el diseño del formulario de valoraciones(parte inferior), 
    en resolución 1920 x 1080 no se muestra correctamente, mientras que en 1366 x 768 si se muestra de acuerdo al curso
  </em>
  <!-- End notes -->