
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Listado de facturas</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>Edición del archivo de rutas <code>routes/web.php</code></li>
  <li>
    Creación y edición del controlador <code>app/Http/Controllers/InvoiceController.php</code>
    <pre>php artisan make:controller InvoiceController</pre>
    <ul>
      <li>Creación y edición de la función <code>public function admin()</code></li>
      <li>Creación y edición de la función <code>public function download()</code></li>
    </ul>
    <br>
    <em>*No olvidar importar la clase <code>use Illuminate\Support\Collection;</code></em>
  </li>
  <li>
    Creación de la carpeta <code>resources/views/invoices/</code>
    <ul>
      <li>Creación y edición de la vista <code>resources/views/invoices/admin.blade.php</code></li>
    </ul>
  </li>
  <li>Edición de la vista parcial <code>resources/views/partials/navigations/student.blade.php</code></li>
  <li>Edición de la vista parcial <code>resources/views/partials/navigations/teacher.blade.php</code></li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
  
  </ul>

  <em>
    *En este commit hay 2 erorres (Solucionado en este commit - se meten las rutas dentro del grupo auth)
    <ol>
      <li>
        (Solucionado en este commit) Las rutas declaradas en <code>resources/views/subscriptions/admin.blade.php</code> no funcionan porque no 
        existen las rutas (se crearán más adelante)
      </li>
      <li>
        (Solucionado en este commit) Si el usuario no está autenticado y quiere ir a la ruta <code>/subscriptions/admin</code> 
        marca error y esto se arregla más adelante
      </li>
    </ol>
  </em>
  <!-- End notes -->