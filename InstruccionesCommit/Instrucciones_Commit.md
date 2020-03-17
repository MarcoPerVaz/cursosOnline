
<!-- Title -->
<h1 align="center">Proyecto - Cursos Online con Laravel 5.6</h1>
<!-- End Title -->

<!-- Commit name -->
<h2>Commit - <strong>Desarrollar una regla de valoración (Rule) para añadir fortaleza a los passwords</strong></h2>
<!-- End Commit name -->

<!-- Commit instructions -->
<ol>
  <li>
    Creación de la Regla <code>app/Rules/StrengthPassword</code>
    <pre>php artisan make:rule StrengthPassword</pre>
    <ul>
      <li>Edición de la función <code>public function passes($attribute, $value)</code></li>
      <li>Edición de la función <code>public function message()</code></li>
    </ul>
  </li>
  <li>
    Edición del controlador <code>app/Http/Controllers/ProfileController.php</code>
    <ul>
      <li>
        Edición de la función <code>public function update()</code>
        <br>
        <em>*No olvidar importar la regla <code>use App\Rules\StrengthPassword;</code></em>
      </li>
    </ul>
  </li>
</ol>
<!-- End Commit instructions -->

  <!-- Notes -->
  <h3>Notas:</h3>
  <ul>
    
  </ul>

  <em></em>
  <!-- End notes -->