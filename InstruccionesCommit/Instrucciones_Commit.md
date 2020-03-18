
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Desarrollar un middleware para controlar el rol del usuario</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación y edición del middleware <code>app/Http/Middleware/RoleMiddleware.php</code>
    <pre>php artisan make:middleware RoleMiddleware</pre>
    <ul>
      <li>
        Edición de la función <code>public function handle($request, Closure $next)</code>
      </li>
    </ul>
  </li>
  <li>
    Edición del archivo <code>app/Http/Kernel.php</code>
    <br>
    <em>*No olvidar importar el middleware <code>use App\Http\Middleware\RoleMiddleware;</code></em>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em></em>
  <!-- End notes -->