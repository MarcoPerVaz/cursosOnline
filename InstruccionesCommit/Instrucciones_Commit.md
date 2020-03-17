
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Datatables cliente para mostrar los estudiantes de un instructor</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>Edición de la vista <code>resources/views/Profile/index.blade.php</code></li>
  <li>
    Creación del controlador <code>app/Http/Controllers/TeacherController.php</code>
    <pre>php artisan make:controller TeacherController</pre>
    <ul>
      <li>Creación de la función <code>public function students()</code></li>
    </ul>
  </li>
  <li>Edición del archivo de rutas <code>routes/web.php</code></li>
  <li>Creación y edición de la vista parcial <code>resources/views/partials/modal.blade.php</code></li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em>
    *Se muestra un error porque no se le está enviando información desde el controlador
    a Datatables pero se solucionan más adelante
  </em>
  <!-- End notes -->