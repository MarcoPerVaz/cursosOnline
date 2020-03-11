
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Obtener el detalle de un curso con sus relaciones, diferencia entre WITH y LOAD</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación y edición del controlador <code>app/Http/Controllers/CourseController</code>
    <pre>php artisan make:controller CourseController</pre>
    <em>*No olvidar importar el modelo <code>use App\Course;</code></em>
  </li>
  <li>
    Edición del archivo de rutas <code>routes/web.php</code>
    <br>
    <em>*Rutas para cursos</em>
  </li>
  <li>
    Edición del modelo <code>app/Course.php</code>
    <br>
    <em>*Se hace uso de Model Binding para usar el slug en lugar del id en la url</em>
  </li>
  <li>
    Edición del modelo <code>app/Review.php</code>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em>*Más información en <code>app/Http/Controllers/CourseController</code> (Diferencia entre Load y With</em>
  <!-- End notes -->