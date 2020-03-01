
<h1 align="center">Instalación | Cursos Online con Laravel 5.6</h1>

# Pasos

- **[Clonar el proyecto usando]**

  `git clone {urlDelRepositorio} "nombreProyecto"`

- **[Instalar las dependencias de php]**

  `composer install`

- **[Copiar el archivo .env-example, cambiarle el nombre a .env]**

  -Editarlo con los datos para la conexión a la base de datos

- **[Crear la Base de datos]**

- **[Generar las migraciones]**

  `php artisan migrate` | Implementar las migraciones en la base de datos

  `php artisan migrate --seed` | Implementar las migraciones en la base de datos y llenar con datos predefinidos

  `php artisan migrate:refresh` | Borra y recrea las migraciones en la base de datos

  `php artisan migrate:refresh --seed` |  Borra y recrea las migraciones con datos predefinidos

- **[Generar la llave del proyecto]**

  `php artisan key:generate`

- Fin

<!-- Notas -->
<h2>Notas:</h2>

<em>*El archivo InstruccionesCommit/Instrucciones_Commit.md solo tendrá información sobre el commit realizado.</em>

<em>*Los archivos .gitkeep o .gitgnore (solo se usa uno para ignorar seguimiento de archivos en Git),
     se usan para que Git tenga seguimiento de carpetas vacias.
</em>