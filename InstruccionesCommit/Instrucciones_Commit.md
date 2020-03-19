
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Eliminar cursos utilizando borrados lógicos</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Edición del controlador <code>app/Http/Controllers/CourseController.php</code>
    <ul>
      <li>
        Creación y edición de la función <code>public function edit($slug)</code>
        <br>
        <em>*No olvidar importar el modelo <code>use App\Course;</code></em>
      </li>
      <li>
        Creación y edición de la función <code>public function update($slug)</code>
        <br>
        <em>*No olvidar importar el FormRequest <code>use App\Http\Requests\CourseRequest;</code></em>
        <br>
        <em>*No olvidar importar el Helper <code>use App\Helpers\Helper;</code></em>
      </li>
    </ul>
  </li>
  <li>Edición del FormRequest <code>app/Http/Requests/CourseRequest.php</code></li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em></em>
  <!-- End notes -->