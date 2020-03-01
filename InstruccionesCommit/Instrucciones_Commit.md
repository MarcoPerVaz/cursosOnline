
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Migraciones - Profesores, estudiantes, categorías, niveles y cursos</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación del modelo Teacher con su migración(edición) y su factoría
    <pre>php artisan make:model Teacher -mf</pre>
  </li>
  <li>
    Implementar las migraciones borrando y creando todas
    <pre>php artisan migrate:fresh</pre>
  </li>
  <li>
    Creación del modelo Student con su migración(edición) y su factoría
    <pre>php artisan make:model Student -mf</pre>
  </li>
  <li>
    Implementar las migraciones borrando y creando todas
    <pre>php artisan migrate:fresh</pre>
  </li>
  <li>
    Creación del modelo Level con su migración(edición) y su factoría
    <pre>php artisan make:model Level -mf</pre>
  </li>
  <li>
    Implementar las migraciones solo agregando la nueva migración
    <pre>php artisan migrate</pre>
  </li>
  <li>
    Creación del modelo Category con su migración(edición) y su factoría
    <pre>php artisan make:model Category -mf</pre>
  </li>
  <li>
    Implementar las migraciones solo agregando la nueva migración
    <pre>php artisan migrate</pre>
  </li>
  <li>
    Creación del modelo(edición) Course con su migración(edición) y su factoría
    <pre>php artisan make:model Course -mf</pre>
  </li>
  <li>
    Implementar las migraciones solo agregando la nueva migración
    <pre>php artisan migrate</pre>
  </li>
</ol>
<!-- End Commit instructions -->

<!-- Notes -->
<h3>Notas:</h3>
<ul>

</ul>

<em></em>
<!-- End notes -->