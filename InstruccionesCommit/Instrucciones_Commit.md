
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>FormReuqest para validar el alta de los cursos</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación y edición del FormRequest <code>app/Http/Request/CourseRequest.php</code>
    <pre>php artisan make:request CourseRequest</pre>
    <em>*Al usar el comando la carpeta <code>Request/</code> se crea si no existe</em>
    <br>
    <ul>
      <li>
        Edición de la función <code>public function authorize()</code>
        <br>
        <em>*No olvidar importar el modelo <code>use App\Role;</code></em>
      </li>
      <li>
        Edición de la función <code>public function rules()</code>
        <br>
        <em>*No olvidar importar la clase <code>use Illuminate\Validation\Rule;</code></em>
      </li>
    </ul>
  </li>
  <li>
    Edición del controlador <code>app/Http/Controllers/CourseController.php</code>
    <ul>
      <li>
        Creación y edición de la función <code>public function store()</code>
        <br>
        <em>*No olvidar importar el FormRequest <code>use App\Http\Requests\CourseRequest;</code></em>
      </li>
    </ul>
  </li>
  <li>Edición del archivo <code>resources/lang/en/validation.php</code></li>
  <li>Edición del archivo <code>resources/lang/es/validation.php</code></li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em></em>
  <!-- End notes -->