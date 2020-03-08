
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Middleware para configurar el idioma de nuestra aplicación en cada petición</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación y edición del middleware <code>app/Http/Middleware/Language.php</code>
    <pre>php artisan make:middleware Language</pre>
    <em>*No olvidar importar la clase Carbon y la clase App</em>
    <br>
    <code>use Carbon\Carbon;</code>
    <br>
    <code>use Illuminate\Support\Facades\App;</code>
  </li>
  <li>
    Edición del archivo <code>app/Http/Kernel.php</code>
    <br>
    <em>*No olvidar importar la clase <code>use App\Http\Middleware\Language;</code></em>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>
      Cualquier variable en Blade que sea <code>{{ __("nombreVariable") }}</code> y que el nombre sea el mismo que en
      <br>
      <code>resources/lang/en.json</code> o
      <code>resources/lang/es.json</code>
      <br>
      Ejemplo <code>resources/lang/en.json</code>:
      <pre>
          {
          "nombreVariable": "Variable information"
          }
        </pre>
      Ejemplo <code>resources/lang/es.json</code>:
      <pre>
          {
          "nombreVariable": "Información de variable"
          }
        </pre>
    </li>
  </ul>

  <em></em>
  <!-- End notes -->