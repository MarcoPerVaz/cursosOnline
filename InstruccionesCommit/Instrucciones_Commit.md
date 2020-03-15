
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Procesar suscripciones con Stripe con o sin cupón</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Edición del controlador <code>app/Http/Controllers/SubscriptionController.php</code>
    <ul>
      <li>Edición de la función <code>public function processSubscription()</code></li>
      <li>Creación y edición de la función <code>public function admin()</code></li>
    </ul>
  </li>
  <li>
    Ir a <a href="https://dashboard.stripe.com/test/dashboard">Stripe</a>
    <br>
    <em>*Iniciar sesión para ir al dashboard</em>
    <ul>
      <li>Seleccionar <code>development</code> como usuario</li>
      <li>Click en la sección <code>Billing/Cupones</code></li>
      <li>Click en <code>Crear un cupón de prueba</code></li>
      <li>Asignar nombre <code>DESCUENTO</code></li>
      <li>Asignar ID <code>DESCUENTO</code></li>
      <li>Seleccionar <code>Descuento fijo</code></li>
      <li>Asignar <code>Importe del descuento 40.00</code></li>
      <li>Click en <code>Crear cupón</code></li>
    </ul>
  </li>
  <li>Creación y edición de la vista <code>resources/views/subscriptions/admin.blade.php</code></li>
  <li>Edición del archivo de rutas <code>routes/web.php</code></li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
  
  </ul>

  <em></em>
  <!-- End notes -->