
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Insertar información inicial en Base de datos con Seeds</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
  <ol>
    <li>Edición del archivo <code>config/filesystems</code></li>
    <li>Edición del archivo <code>database/seeds/DatabaseSeeder</code></li>
    <li>
      Implementar las migraciones, borrando todo, creandolo de nuevo e implementando las semillas
      <pre>php artisan migrate:fresh --seed</pre>
    </li>
    <li>
      Edición del archivo <code>\vendor\fzaninotto\faker\src\Faker\Provider\Image.php</code>
      <br>
      <em>*Hay un problema con la página de las imágenes y se tuvo que hacer el cambio</em>
      <br>
      <em>*Este archivo no tiene seguimiento por parte de Git, así que se tiene que hacer el cambio al clonar el proyecto</em>
      <br>
      Edición de la función
      <br>
      <code>public static function imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray =
          false) ()</code>
      <br>
      <code>{</code>
      <br>
      <code>&nbsp; // $baseUrl = "https://lorempixel.com/";</code>
      <br>
      <code>&nbsp; $baseUrl = "http://placeimg.com/";</code>
      <br>
      <code>&nbsp; // return $baseUrl . $url;</code>
      <br>
      <code>&nbsp; return "{$baseUrl}{$width}/{$height}/{$category}";</code>
      <br>
      <code>}</code>
      <br>
      <em>*Solo se reemplazan esas 2 líneas, lo demás se queda como esta.</em>
      <br>
      <em>
        *No se deben modificar los archivos dentro de la carpeta vendor, pero la página de donde se toman
        las imágenes tiene años que viene fallando y se tuvo que usar otra y por consiguiente modificar el archivo de vendor
      </em>
    </li>
  </ol>
<!-- End Commit instructions -->
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
  
  </ul>

  <em></em>
  <!-- End notes -->