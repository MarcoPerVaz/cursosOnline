
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Retornar estudiantes de un instructor con datatables en el servidor</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Edición del controlador <code>app/Http/Controllers/TeacherController.php</code>
    <ul>
      <li>
        Edición de la función <code>public function students()</code>
        <br>
        <em>*No olvidar importar el modelo <code>use App\Student;</code></em>
      </li>
    </ul>
  </li>
  <li>
    Edición del modelo <code>app/Course.php</code>
    <br>
    <em>*No olvidar importar la clase <code>use Illuminate\Database\Eloquent\SoftDeletes;</code></em>
  </li>
  <li>
    Creación de la carpeta <code>resources/views/students/</code>
    <ul>
      <li>
        Creación de la carpeta <code>resources/views/students/datatables/</code>
        <ul>
          <li>Creación de la vista <code>resources/views/students/datatables/actions.blade.php</code></li>
        </ul>
      </li>
    </ul>
  </li>
  <li>
    Edición del modelo <code>app/Student</code>
    <br>
    <em>*No olvidar agregar la propiedad <code>protected $appends = ['courses_formatted'];</code></em>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em>
    *(Solucionado) Se muestra un error porque no se le está enviando información desde el controlador
    a Datatables pero se solucionan más adelante
  </em>
  <br>
  <em>*Más información en el controlador <code>app/Http/Controllers/TeacherController.php</code></em>
  <!-- End notes -->