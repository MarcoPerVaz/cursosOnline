
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Obtener los cursos filtrados con VueTables 2 y Eloquent</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación y edición del controlador <code>app/Http/Controllers/AdminController.php</code>
    <pre>php artisan make:controller AdminController</pre>
    <ul>
      <li>
        Creación y edición de la función <code>public function courses()</code>
      </li>
      <li>
        Creación y edición de la función <code>public function coursesJson()</code>
        <br>
        <em>*No olvidar importar la clase <code>use App\VueTables\EloquentVueTables;</code></em>
        <br>
        <em>*No olvidar importar el modelo <code>use App\Course;</code></em>
      </li>
    </ul>
  </li>
  <li>Edición del archivo de rutas <code>routes/web.php</code></li>
  <li>
    Creación de la carpeta <code>app/VueTables</code>
    <ul>
      <li>Creación y edición de la interfaz <code>app/VueTables/VueTablesInterface.php</code></li>
      <li>Creación y edición del archivo <code>app/VueTables/EloquentVueTables.php</code></li>
    </ul>
  </li>
  <li>
    Creación de la carpeta <code>resources/views/admin/</code>
    <ul>
      <li>Creación y edición de la vista <code>resources/views/admin/courses.blade.php</code></li>
    </ul>
  </li>
  <li>Edición de la vista parcial <code>resources/views/partials/navigations/admin.blade.php</code></li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em></em>
  <!-- End notes -->