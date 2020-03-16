
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Notificar por correo al profesor cuando un estudiante se inscribe (Markdown)</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
 <li>
   Edición del archivo <code>.env</code>
   <br>
    <br>
    <code> MAIL_DRIVER=smtp</code>
    <br>
     <code>MAIL_FROM_ADDRESS=app@cursosonline.com</code>
    <br>
     <code>MAIL_FROM_NAME="Cursos Online Laravel 5.6"</code>
    <br>
     <code>MAIL_HOST=smtp.mailtrap.io</code>
    <br>
     <code>MAIL_PORT=2525</code>
    <br>
     <code>MAIL_USERNAME=f342f5dfd159ca</code>
    <br>
     <code>MAIL_PASSWORD=030e3333865c6d</code>
    <br>
     <code>MAIL_ENCRYPTION=null</code>
    <br>
    <em>*USERNAME y PASSWORD dependen de las credenciales de Mailtrap</em>
  </li>
  <li>
    Comando para publicar las vistas de cualquier librería que pueda ser personalizado
    <pre>php artisan vendor:publish</pre>
    Elegir el número de <code>Tag: laravel-mail</code>
    <br>
    Colocarlo en la consola y dar enter
    <br>
    <em>*A partir de laravel 5.6 en la consola se te muestran opciones para decidir que librería publicar</em>
    <br>*Se crean las vistas para personalizar los emails dependiendo las necesidades del cliente
  </li>
  <li>
    Creación y edición del archivo de <code>app/Mail/NewStudentInCourse.php</code>
    <pre>php artisan make:mail NewStudentInCourse</pre>
    <em>*La carpeta <code>Mail/</code> se crea automáticamente si no existe</em>
    <ul>
      <li>
        Edición de la función constructor <code>public function __construct(Course $course, $student_name)</code>
      </li>
      <li>
        Edición de la función <code>public function build()</code>
      </li>
      <em>*No olvidar crear las propiedades <code>private $course; private $student_name;</code></em>
      <br>
      <em>*No olvidar importar el modelo <code>use App\Course;</code></em>
    </ul>
  </li>
  <li>
    Creación de la carpeta <code>resources/views/emails</code>
    <ul>
      <li>
        Creación de la vista markdown <code>resources/views/emails/new_student_in_course.blade.php</code>
        <br>
        <em>*Se hace uso de los componentes en laravel</em>
        <br>
        <em>*En lenguaje markdown tener cuidado al tabular</em>
      </li>
    </ul>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em>*Si se requiere cambiar los estilos de los mails debe editar <code>resources/views/vendor/mail/html/</code></em>
  <!-- End notes -->