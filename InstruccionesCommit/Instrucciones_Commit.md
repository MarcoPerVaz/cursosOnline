
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Instalar y configurar idiomas adicionales para nuestra aplicación</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Instalación de la librería Laravel Lang
    <pre>composer require caouecs/laravel-lang:~3.0</pre>
    <ul>
      <li>
        <code>Copiar la carpeta vendor/caouecs/src/es</code>
        <br>
        y pegar en
        <br>
        <code>resources/lang/</code>
      </li>
    </ul>
  </li>
  <li>
    Edición del archivo config/app.php
    <br>
    <code>'locale' => 'es',</code>
  </li>
</ol>
<!-- End Commit instructions -->

<!-- Notes -->
<h3>Notas:</h3>
<ul>
  <li>
    Laravel Lang es una librería para traducir todos los mensajes que laravel tiene
    pero que por defecto solo tiene en Inglés
    <pre><a href="https://github.com/caouecs/Laravel-lang">Ir a Laravel Lang</a></pre>
  </li>
</ul>

<em></em>
<!-- End notes -->