
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Controlador Subscriptions, Middleware en el constructor e inicio página planes</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>Edición de la vista <code>resources/views/layouts/app.blade.php</code></li>
  <li>
    Creación y edición del controlador <code>app/Http/Controllers/SubscriptionController</code>
    <pre>php artisan make:controller SubscriptionController</pre>
    <ul>
      <li>Creación y edición del método constructor <code>public function __construct()</code></li>
      <li>Creación y edición de la función <code>public function plans()</code></li>
      <li>Creación de la función <code>public function processSubscription()</code></li>
    </ul>
  </li>
  <li>Edición del archivo de rutas <code>routes/web.php</code></li>
  <li>Edición de la vista parcial <code>resources/views/partials/courses/action_button.blade.php</code></li>
  <li>
    Creación de la carpeta <code>resources/views/subscriptions/</code>
    <ul>
      <li>Creación y edición de la vista <code>resources/views/subscriptions/plans.blade.php</code></li>
    </ul>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
  
  </ul>

  <em></em>
  <!-- End notes -->