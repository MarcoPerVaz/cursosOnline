
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Descargar y personalizar facturas</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
 <li>
   Edición del controlador <code>app/Http/Controllers/InvoiceController.php</code>
   <ul>
     <li>Edición de la función <code>public function download()</code></li>
   </ul>
 </li>
 <li>
   Comando para publicar las vistas de cualquier librería que pueda ser personalizado
   <pre>php artisan vendor:publish</pre>
   Elegir el número de <code>Provider: Laravel\Cashier\CashierServiceProvider</code>
   <br>
   Colocarlo en la consola y dar enter
   <br>
   <em>*A partir de laravel 5.6 en la consola se te muestran opciones para decidir que librería publicar</em>
   <br>*Se crea la vista para personalizar la factura dependiendo las necesidades del cliente
 </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>El diseño por defecto de la factura es muy simple por lo que se cambió</li>
  </ul>

  <em></em>
  <!-- End notes -->