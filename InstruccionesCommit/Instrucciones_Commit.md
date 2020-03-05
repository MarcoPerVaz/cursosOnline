
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Sobreescribir el proceso de registro</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Edición del controlador <code>app/Http/Controllers/Auth/RegisterController</code>
    <ul>
      <li>Creación y edición de la función <code>protected function registered(Request $request, $user)</code></li>
      <br>
      <em>*No olvidar importar <code>use app\Student;</code></em>
      <br>
      <em>*No olvidar importar <code>use Illuminate\Http\Request;</code></em>
      <br>
      <em>*Esta función sobreescribe la función localizada en vendor (más información en Notas)</em>
    </ul>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em>
    *Se sobreescribe la función <code>protected function registered(Request $request, $user)</code> 
     localizada en vendor/ y que no se debe modificar desde ahí
    <br>
    <code>\vendor\laravel\framework\src\Illuminate\Foundation\Auth\RegistersUsers.php</code>
  </em>
  <!-- End notes -->