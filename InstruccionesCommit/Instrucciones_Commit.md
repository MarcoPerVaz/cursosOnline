
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Cancelar y renaudar suscripciones</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>Edición del archivo de rutas <code>routes/web.php</code></li>
  <li>
    Edición del controlador <code>app/Http/Controllers/SubscriptionController.php</code>
    <ul>
      <li>Creación y edición de la función <code>public function resume()</code></li>
      <li>Creación y edición de la función <code>public function cancel()</code></li>
    </ul>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
  
  </ul>

  <em>
    *En este commit hay 2 erorres
    <ol>
      <li>
        Las rutas declaradas en <code>resources/views/subscriptions/admin.blade.php</code> no funcionan porque no 
        existen las rutas (se crearán más adelante)
      </li>
      <li>
        Si el usuario no está autenticado y quiere ir a la ruta <code>/subscriptions/admin</code> 
        marca error y esto se arregla más adelante
      </li>
    </ol>
  </em>
  <!-- End notes -->