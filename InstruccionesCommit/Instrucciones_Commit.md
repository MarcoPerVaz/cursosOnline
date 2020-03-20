
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Envío de correo al profesor cuando se aprueba o rechaza un curso con VueTables 2</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Usar el comando 
    <pre>npm run watch</pre>
  </li>
  <li>
    Creación y edición del archivo mail <code>app/Mail/CourseRejected.php</code>
    <pre>php artisan make:mail CourseRejected</pre>
    <em>*La carpeta <code>Mail/</code> se crea si no existe</em>
    <ul>
      <li>
        Edición de la función <code>public function __construct()</code>
        <br>
        <em>*No olvidar importar el modelo <code>use App\Course;</code></em>
        <br>
        <em>*No olvidar inicializar la propiedad <code>private $course;</code></em>
      </li>
      <li>
        Edición de la función <code>public function build()</code>
      </li>
    </ul>
  </li>
  <li>
    Creación y edición del archivo mail <code>app/Mail/CourseApproved.php</code>
    <pre>php artisan make:mail CourseApproved</pre>
    <em>*La carpeta <code>Mail/</code> se crea si no existe</em>
    <ul>
      <li>
        Edición de la función <code>public function __construct()</code>
        <br>
        <em>*No olvidar importar el modelo <code>use App\Course;</code></em>
        <br>
        <em>*No olvidar inicializar la propiedad <code>private $course;</code></em>
      </li>
      <li>
        Edición de la función <code>public function build()</code>
      </li>
    </ul>
  </li>
  <li>Creación y edición de la vista mail<code>resources/views/emails/courses_approved.blade.php</code></li>
  <li>Creación y edición de la vista mail<code>resources/views/emails/courses_rejectedblade.php</code></li>
  <li>
    Edición del controlador <code>app/Http/Controllers/AdminController.php</code>
    <ul>
      <li>
        Creación y edición de la función <code>public function updateCourseStatus()</code>
        <br>
        <em>*No olvidar importar el modelo <code>use App\Course;</code></em>
        <br>
        <em>*No olvidar importar <code>use App\Mail\CourseApproved;</code></em>
        <br>
        <em>*No olvidar importar <code>use App\Mail\CourseRejected;</code></em>
      </li>
    </ul>
  </li>

  <li>Edición del componente <code>resources/assets/js/components/Courses.vue</code></li>
  <li>Edición del archivo <code>resources/assets/js/app.js</code></li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em></em>
  <!-- End notes -->