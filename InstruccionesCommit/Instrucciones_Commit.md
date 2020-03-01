
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>PHP IDE Helper</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Instalación de la librería Laravel IDE Helper
    <pre>composer require --dev barryvdh/laravel-ide-helper</pre>
    <ul>
      <li>
        Usar el comando que genera los comentarios sobre la documentación de las Facades de laravel
        <pre>php artisan ide-helper:generate</pre>
      </li>
      <li>
        Usar el comando que genera los comentarios sobre la documentación de los modelos de laravel
        <pre>php artisan ide-helper:models</pre>
        <em>*Si pregunta poner "yes" en la consola</em>
        <br>
        <em>*Este comando edita todos los modelos existentes</em>
      </li>
      <li>
        Hay un tercer comando pero solo es para el editor de código PHPStorm (PhpStorm Meta file)
        <pre>php artisan ide-helper:meta</pre>
      </li>
    </ul>
  </li>
</ol>
<!-- End Commit instructions -->

<!-- Notes -->
<h3>Notas:</h3>
<ul>
  Laravel IDE Helper es una librería que ayuda con la documentación de las clases dentro del proyecto de laravel
  <pre><a href="https://github.com/barryvdh/laravel-ide-helper">Ir a IDE Helper</a></pre>
</ul>

<em></em>
<!-- End notes -->