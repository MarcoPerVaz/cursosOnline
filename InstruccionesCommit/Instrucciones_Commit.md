
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Crear APPs para el inicio de sesión con Google</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
  <!-- API Googlr -->
  <h3>Google</h3>
  <ol>
    <li>
      Iniciar sesión en Google Developers: 
      <pre><a href="https://accounts.google.com/signin/v2/identifier?sacu=1&continue=https%3A%2F%2Fconsole.developers.google.com%2Fcloud-resource-manager%3Fpli%3D1&followup=https%3A%2F%2Fconsole.developers.google.com%2Fcloud-resource-manager%3Fpli%3D1&osid=1&service=cloudconsole&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Ir a Google developers</a></pre>
      <em>*Iniciar sesión con tu cuenta de Google o crear una nueva</em>
    </li>
    <li>
      Click en CREATE PROJECT
    </li>
    <li>
      Asignar nombre
      <br>
      <code>CursosOnline</code>
    </li>
    <li>Click en Crear</li>
    <li>Desde el buscador poner <code>google+ api</code></li>
    <li>Click en Habilitar</li>
    <li>Click en Configurar pantalla de consentimiento</li>
    <li>Seleccionar Externo y click en Crear</li>
    <li>
      Nombre de la aplicación
      <br>
      <code>Cursos Online con Laravel 5.6</code>
    </li>
    <li>
      Dominios autorizados
      <br>
      <code>cursosonline.it</code>
      <br>
      <em>*Darle enter para agregarlo</em>
    </li>
    <li>Click en Credenciales</li>
    <li>Click en + CREAR CREDENCIALES</li>
    <li>Click en ID de cliente de OAuth</li>
    <li>Seleccionar web y click en Crear</li>
    <li>
      Nombre
      <br>
      <code>Cliente web 1</code>
    </li>
    <li>
      En URIs de redirección autorizados
      <br>
      <code>https://cursosonline.it/login/google/callback</code>
    </li>
    <li>Click en Crear</li>
    <li>Se muestran las credenciales</li>
  </ol>

  <!-- Proyecto Cursos Online con laravel 5.6 -->
  <h3>Proyecto Cursos Online con laravel 5.6</h3>
  <ol>
    <li>
      Edición del archivo config/services.php
      <br>
      <em>*Se registran las configuraciones de Socialite de la API</em>
    </li>
    <li>
      Edición del archivo .env
      <br>
      <em>*Se agregan las configuraciones para Socialite dependiendo las llaves de la API</em>
      <br>
      <code>GOOGLE_CLIENT_ID=</code>
      <br>
      <code>GOOGLE_CLIENT_SECRET=</code>
    </li>
  </ol>
<!-- End Commit instructions -->
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
   
  </ul>

  <em>*La URL del proyecto debe ser corta y con dominio .it, ya que las API's muestran error</em>
  <!-- End notes -->