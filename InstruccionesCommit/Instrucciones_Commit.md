
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Relacionar todos los modelos de la App con Eloquent y finalizar Seeds</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
  <ol>
    <li>Edición del modelo <code>app/Course</code></li>
    <li>Edición del modelo <code>app/Student</code></li>
    <li>Edición del modelo <code>app/Goal</code></li>
    <li>Edición del modelo <code>app/Level</code></li>
    <li>Edición del modelo <code>app/Requirement</code></li>
    <li>Edición del modelo <code>app/Teacher</code></li>
    <li>Edición del modelo <code>app/User</code></li>
    <li>
      Creación y edición del modelo <code>UserSocialAccount</code>
      <pre>php artisan make:model UserSocialAccount</pre>
    </li>
    <br>
    <em>*Relaciones con Eloquent</em>
    <li>
      Edición del archivo <code>seeds/DatabaseSeeder</code>
      <br>
      <em>*Se crea el factory para los cursos</em>
    </li>
    <li>
      Implementación de las migraciones borrando y generandolas de nuevo con información predefinida
      <pre>php artisan migrate:fresh --seed</pre>
    </li>
  </ol>
<!-- End Commit instructions -->
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
  
  </ul>

  <em>*Más información en el modelo app/Course</em>
  <br>
  <em>*Más información en el modelo app/Student</em>
  <!-- End notes -->