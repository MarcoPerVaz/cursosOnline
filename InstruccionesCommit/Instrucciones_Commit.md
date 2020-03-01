
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Instalar Socialite, inicio del sistema de autenticación</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Instalación de Socialite (fue instalado en el commit - Instalación de dependencias de PHP)
    <pre>composer require laravel/socialite "^3.2.0"</pre>
  </li>
  <li>
    Instalación del scaffolding de Autenticación de Laravel
    <pre>php artisan make:auth</pre>
    <em>*Este comando genera archivos y código necesario para la autenticación del proyecto</em>
  </li>
  <li>
    Edición de la vista resources/views/auth/login.blade.php
    <br>
    <em>*Se agregó la propiedad novalidate a la etiqueta form</em>
  </li>
  <li>
    Edición de la vista resources/views/auth/register.blade.php
    <br>
    <em>*Se agregó la propiedad novalidate a la etiqueta form</em>
  </li>
  <li>
    Edición de la vista resources/views/auth/passwords/email.blade.php
    <br>
    <em>*Se agregó la propiedad novalidate a la etiqueta form</em>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    <li>
      Laravel Socialite es una librería para iniciar sesión con Facebook, GitHub, Bitbucket, Twitter, Google.
      <pre><a href="https://laravel.com/docs/5.6/socialite">Ir a Laravel Socialite</a></pre>
    </li>
    <li>
      Laravel Auth es un paquete de Laravel que crea lo necesario para un inicio de sesión
      <pre><a href="https://laravel.com/docs/5.6/authentication">Ir a Authentication de Laravel</a></pre>
      <pre><a href="https://laravel.com/docs/5.6/authentication#included-routing">Ir a comando de Authentication</a></pre>
    </li>
  </ul>

  <em></em>
  <!-- End notes -->