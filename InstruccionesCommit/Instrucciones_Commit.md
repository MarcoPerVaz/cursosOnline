
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Desarrollar un Helper para subir archivos y preparar el curso para guardar</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación de la carpeta <code>app/Helpers</code>
    <ul>
      <li>
        Creación y edición del archivo <code>app/Helpers/Helper.php</code>
        <br>
        <em>*No olvidar importar el namespace <code>namespace App\Helpers;</code></em>
      </li>
    </ul>
  </li>
  <li>
    Edición del controlador <code>app/Http/Controllers/CourseController.php</code>
    <ul>
      <li>
        Edición de la función <code>public function store(CourseRequest $course_request)</code>
        <br>
        <em>*No olvidar importar el helper <code>use App\Helpers\Helper;</code></em>
        <br>
        <em>*No olvidar importar el modelo <code>use App\Course;</code></em>
      </li>
    </ul>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em>*Más información en <code>app/Http/Controllers/CourseController.php</code></em>
  <!-- End notes -->