
  <!-- Title -->
  <h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
  <!-- End Title -->

  <!-- Commit name -->
  <h2>Commit - <strong>Migraciones - Usuarios, roles, suscripciones y socialite</strong></h2>
  <!-- End Commit name -->
  
  <!-- Commit instructions -->
  <ol>
     <li>
        Creación del modelo role(edición) y su factoría
        <pre>php artisan make:model Role -f</pre>
        Edición del modelo Role.php
    </li>
    <li>
      Edición de la migración create_users_table
      <br>
      <em>*Las migraciones (usuarios, roles, suscripciones y socialite) se crean en la migración create_users_table</em>
    </li>
    <li>
      Creación de la Base de Datos cursosOnline_laravel56_Udemy desde la consola de laragon
      <pre>mysql -u root</pre>
      <pre>create database cursosOnline_laravel56_Udemy</pre>
    </li>
    <li>
      Edición del archivo .env
      <br>
      <code>DB_DATABASE=cursosOnline_laravel56_Udemy</code>
      <br>
      <code>DB_USERNAME=root</code>
      <br>
      <code>DB_PASSWORD=</code>
    </li>
    <li>
      Implementar las migraciones
      <pre>php artisan migrate</pre>
      Implementar las migraciones borrando todo y volviendolo a implementar
      <pre>php artisan migrate:fresh</pre>
    </li>
  </ol>
  <!-- End Commit instructions -->
  
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>

  </ul>
    
  <em>*Más información en la migración create_users_table</em>
  <!-- End notes -->