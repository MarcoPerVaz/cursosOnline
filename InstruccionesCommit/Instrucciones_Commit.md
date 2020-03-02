
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Crear APPs para el inicio de sesión con Facebook y Github</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
  <!-- API Facebook -->
  <h3>Facebook</h3>
  <ol>
    <li>
      Iniciar sesión en Facebook Developers: 
      <pre><a href="https://www.facebook.com/login/?next=https%3A%2F%2Fdevelopers.facebook.com%2F%3Fno_redirect%3D1">Ir a Facebook developers</a></pre>
      <em>*Iniciar sesión con tu cuenta de Facebook o crear una nueva</em>
    </li>
    <li>
      Crea una nueva App
    </li>
    <li>
      Asignar nombre
      <br>
      <code>Cursos Online con Laravel 5.6</code>
    </li>
    <li>Asignar email de contacto</li>
    <li>Click en Configurar Inicio de sesión con Facebook</li>
    <li>Click en Configuración en el panel inferior izquierdo</li>
    <li>
      Colocar en el campo URI de redireccionamiento de OAuth válidos
      <br>
      <code>https://cursosonline.it/login/facebook/callback</code>
      <br>
      <em>*Tener en cuenta el nombre del Host virtual y su dominio</em>
    </li>
    <li>Click en Guardar cambios</li>
    <li>Click en Configuración de la parte superior izquierda</li>
    <li>
      Click en Básica
      <br>
      <em>*Ahí es donde se muestran las credenciales de la API de Facebook</em>
    </li>
  </ol>

  <!-- API Github -->
  <h3>GitHub</h3>
  <ol>
    <li>
      Iniciar sesión en Github: 
      <pre><a href="https://github.com/">Ir a Github</a></pre>
      <em>*Iniciar sesión con tu cuenta de Github o crear una nueva</em>
    </li>
    <li>Click en la imagen de perfil en la parte posterior derecha</li>
    <li>Click en Settings</li>
    <li>Click en Developer settings</li>
    <li>
      Click en New GitHub App
      <br>
      <em>*Si aparece lo de confirm password, ingresarlo</em>
    </li>
    <li>
      Asignar nombre de la aplicación
      <br>
      <code>Cursos Online con Laravel 5.6</code>
    </li>
    <li>
      Asignar User authorization callback URL
      <br>
      <code>https://cursosonline.it/login/github/callback</code>
      <br>
      <em>*Tener en cuenta el nombre del Host virtual y su dominio</em>
    </li>
    <li>
      Asignar Homepage URL
      <br>
      <code>https://cursosonline.it</code>
    </li>
    <li>
      Click en Create GitHub App
      <br>
      <em>*Ahí es donde se muestran las credenciales de la API de GitHub</em>
    </li>
  </ol>

  <!-- Proyecto Cursos Online con laravel 5.6 -->
  <h3>Proyecto Cursos Online con laravel 5.6</h3>
  <ol>
    <li>
      Edición del archivo config/services.php
      <br>
      <em>*Se registran las configuraciones de Socialite de las 2 API's</em>
    </li>
    <li>
      Edición del archivo .env
      <br>
          <em>*Se agregan las configuraciones para Socialite dependiendo las llaves de la API</em>
          <br>
          <code>GITHUB_CLIENT_ID=</code>
          <br>
          <code>GITHUB_CLIENT_SECRET=</code>
          <br>
          <br>
          <code>FACEBOOK_CLIENT_ID=</code>
          <br>
          <code>FACEBOOK_CLIENT_SECRET=</code>
    </li>
  </ol>
<!-- End Commit instructions -->
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
   
  </ul>

  <em>*La URL del proyecto debe ser corta y con dominio .it, ya que las API's muestran error</em>
  <!-- End notes -->