
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Desarrollar el listado de las suscripciones del usuario identificado</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Edición del controlador <code>app/Http/Controllers/SubscriptionController.php</code>
    <ul>
      <li>Edición de la función <code>public function admin()</code></li>
    </ul>
  </li>
  <li>Edición de la vista <code>resources/views/subscriptions/admin.blade.php</code></li>
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