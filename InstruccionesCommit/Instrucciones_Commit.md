
  <!-- Title -->
  <h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Instalación de dependencias de PHP</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
     <li>
        Instalar Intervention Image
        <pre>composer require intervention/image</pre>
    </li>
    <li>
      Instalar Debugbar
      <pre>composer require barryvdh/laravel-debugbar --dev</pre>
    </li>
    <li>
      Instalar Cashier
      <pre>composer require "laravel/cashier":"~7.0"</pre>
    </li>
    <li>
      Instalar Socialite
      <pre>composer require laravel/socialite "^3.2.0"</pre>
    </li>
    <li>
      Instalar Laravel-Datatables
      <pre>$ composer require yajra/laravel-datatables-oracle:"~8.4"</pre>
      <ul>
        <li>
          Edición del archivo config/app.php
          <br>
          <em>*Se agrega el alias de datatables</em>
          <br>
          <code>'DataTables' => Yajra\DataTables\Facades\DataTables::class,</code>
        </li>
      </ul>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
     <li>
        Intervention Image: Librería que permite agregar imágenes a los registros en la Base de Datos
        <pre><a href="http://image.intervention.io/">Ir a Intervention Image</a></pre>
      </li>
     <li>
        Debugbar: Librería que permite tener un mejor control sobre la aplicación
        <pre><a href="https://github.com/barryvdh/laravel-debugbar">Ir a DebugBar</a></pre>
        <em>*Permite ver las consultas a la Base de Datos</em>
        <br>
        <em>*Permite ver las sesiones</em>
        <br>
        <em>*Permite ver las rutas</em>
        <br>
      </li>
      <li>
        Cashier: Librería que permite hacer pagos con Stripe o Braintree's desde tu aplicación
        <pre><a href="https://laravel.com/docs/5.6/billing">Ir a Cashier</a></pre>
      </li>
      <li>
        Socialite: Librería que permite iniciar sesión con Facebook, Twitter, Google, Github y Gitbucket
        <pre><a href="https://laravel.com/docs/5.6/socialite">Ir a Socialite</a></pre>
      </li>
      <li>
        Laravel-Datatables: Librería con una tabla de datos usando ajax 
        <pre><a href="https://github.com/yajra/laravel-datatables">Ir a Laravel-Datatables(Github)</a></pre>
        <pre><a href="https://yajrabox.com/docs/laravel-datatables/master">Ir a Laravel-Datatables(Sitio oficial)</a></pre>
      </li>
  </ul>
    
  <em><b>*A partir de la versión 5.7 de Laravel ya está disponible Laravel Telescope que es más completo que Debugbar</b></em>
  <!-- End notes -->