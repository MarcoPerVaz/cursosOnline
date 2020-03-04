
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Procesar registro e inicio de sesión con Socialite utilizando transacciones</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
  <ol>
    <li>
      Edición del controlador <code>app/Http/Controllers/Auth/LoginController</code>
      <ul>
        <li>Edición de la función <code>handleProviderCallback()</code></li>
      </ul>
    </li>
    <li>Edición de la vista resources/views/layouts/app.blade.php</li>
  </ol>
<!-- End Commit instructions -->
  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
   <li>El mensaje informativo de cancelar sesión solo se usa con facebook</li>
  </ul>

  <em>*Más información en <code>app/Http/Controller/Auth/LoginController.php</code></em>
  <br>
  <em>
    *Aquí hay un error con el campo slug de la tabla users ya que al crear los 
     registros el campo slug no puede ser null (Se arregla más adelante)
    </em>
  <!-- End notes -->