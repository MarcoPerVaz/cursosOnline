
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Crear cuenta de Stripe, obtener claves y dar de dalta productos</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <p><em>*Estos pasos varían dependiendo si actualizan Stripe</em></p>
  <li>
    Ir a <a href="https://stripe.com/es-mx">Stripe</a>
  </li>
  <li>Crear cuenta o iniciar sesión</li>
  <li>Posicionarse en la cuenta development (test)</li>
  <li>
    En la sección de Desarrolladores clickear en Claves de API
    <ul>
      <li>Copiar la Clave publicable</li>
      <li>Copiar la Clave secreta</li>
      <li>
        Edición del archivo <code>.env</code> (Se deben agregar si no existen)
        <br>
        STRIPE_KEY=clavePublicable
        <br>
        STRIPE_SECRET=claveSecreta
      </li>
    </ul>
  </li>
  <li>
    En la sección Billing clickear en Productos
    <ul>
      <li>Click en Añadir un producto de prueba</li>
      <li>Asignar nombre <code>Suscripción Mensual</code></li>
      <li>Asignar Descripción del cargo en el extracto bancario <code>MENSUAL</code></li>
      <li>Click en Crear producto</li>
      <li>Asignar Sobrenombre del plan <code>monthly</code></li>
      <li>Asignar ID <code>monthly</code></li>
      <li>Asignar Divisa <code>MXN - peso mexicano</code></li>
      <li>Asignar Precio por unidad <code>MXN 243,00</code></li>
      <li>Asignar Intervalo de facturación <code>Cada mes</code></li>
      <li>Click en añadir plan de precios</li>
    </ul>
    <hr>
    <ul>
      <li>Click en Productos</li>
      <li>Click en Nuevo</li>
      <li>Asignar nombre <code>Suscripción Trimestral</code></li>
      <li>Asignar Descripción del cargo en el extracto bancario <code>TRIMESTRAL</code></li>
      <li>Click en Crear producto</li>
      <li>Asignar Sobrenombre del plan <code>quarterly</code></li>
      <li>Asignar ID <code>quarterly</code></li>
      <li>Asignar Divisa <code>MXN - peso mexicano</code></li>
      <li>Asignar Precio por unidad <code>MXN 487,00</code></li>
      <li>Asignar Intervalo de facturación <code>Cada 3 meses</code></li>
      <li>Click en añadir plan de precios</li>
    </ul>
    <hr>
    <ul>
      <li>Click en Productos</li>
      <li>Click en Nuevo</li>
      <li>Asignar nombre <code>Suscripción Anual</code></li>
      <li>Asignar Descripción del cargo en el extracto bancario <code>ANUAL</code></li>
      <li>Click en Crear producto</li>
      <li>Asignar Sobrenombre del plan <code>yearly</code></li>
      <li>Asignar ID <code>yearly</code></li>
      <li>Asignar Divisa <code>MXN - peso mexicano</code></li>
      <li>Asignar Precio por unidad <code>MXN 2.195,00</code></li>
      <li>Asignar Intervalo de facturación <code>Cada año</code></li>
      <li>Click en añadir plan de precios</li>
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