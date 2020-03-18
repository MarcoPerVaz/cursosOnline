
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Procesar envío de correo con AJAX añadiendo el CSRF a la petición</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación y edición del archivo de mail <code>app/Mail/MessageToStudent.php</code>
    <pre>php artisan make:mail MessageToStudent</pre>
    <ul>
      <li>Edición de la función constructor <code>public function __construct()</code></li>
      <li>Edición de la función constructor <code>public function build()</code></li>
      <li>
        Creación y edición de la vista del email <code>resources/views/emails/message_to_student.blade.php</code>
        <br>
        <em>*Cuidado con los espacios al usar lenguaje markdown</em>
      </li>
      <li>
        Edición del controlador <code>app/Http/Controllers/TeacherController.php</code>
        <ul>
          <li>
            Edición de la función <code>public function sendMessageToStudent()</code>
            <br>
            <em>*No olvidar importar el modelo <code>use App\User;</code></em>
            <br>
            <em>*No olvidar importar la clase <code>use App\Mail\MessageToStudent;</code></em>
          </li>
        </ul>
      </li>
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