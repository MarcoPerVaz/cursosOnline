
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Migraciones - Reseñas, requisitos y metas, Relaciones muchos a muchos</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación del modelo Review con su migración(edición) y su factoría
    <pre>php artisan make:model Review -mf</pre>
  </li>
  <li>
    Creación y edición de la migración (tabla pivote) que
    tendrá la relación muchos a muchos (muchos cursos tendrán muchos estudiantes)
    <pre>php artisan make:migration create_table_course_student</pre>
  </li>
  <li>
    Creación del modelo Requirement con su migración(edición) y su factoría
    <pre>php artisan make:model Requirement -mf</pre>
  </li>
  <li>
    Creación del modelo Goal con su migración(edición) y su factoría
    <pre>php artisan make:model Goal -mf</pre>
  </li>
  <li>
    Implementar las migraciones borrando todo y recreando todo de nuevo
    <pre>php artisan migrate:fresh</pre>
  </li>
</ol>
<!-- End Commit instructions -->

<!-- Notes -->
<h3>Notas:</h3>
<ul>

</ul>

<em></em>
<!-- End notes -->