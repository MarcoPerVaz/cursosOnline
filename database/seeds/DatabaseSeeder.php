<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*  */
        Storage::deleteDirectory('courses');
        Storage::deleteDirectory('users');

        Storage::makeDirectory('courses');
        Storage::makeDirectory('users');

        factory(\App\Role::class, 1)->create(['name' => 'admin']);
        factory(\App\Role::class, 1)->create(['name' => 'teacher']);
        factory(\App\Role::class, 1)->create(['name' => 'student']);

        /*  */
        /* Crea 1 usuario y por cada usuario creado se volverá estudiante */
        factory(\App\User::class, 1)->create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('123456'),
            'role_id' => \App\Role::ADMIN
        ])
        ->each(function(\App\User $u) {
            factory(\App\Student::class, 1)->create([
                'user_id' => $u->id
            ]);
        });

        /* Crea 50 usuarios y por cada usuario creado se volverá estudiante */
        factory(\App\User::class, 50)->create()->each(function(\App\User $u) {
            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
        });

        /* Crea 10 usuarios y por cada usuario creado se volverá estudiante */
        factory(\App\User::class, 10)->create()->each(function(\App\User $u) {
            factory(\App\Student::class, 1)->create(['user_id' => $u->id]);
            factory(\App\Teacher::class, 1)->create(['user_id' => $u->id]);
        });

        factory(\App\Level::class, 1)->create(['name' => 'Beginner']); /* Crea un nivel llamado Beginner */
        factory(\App\Level::class, 1)->create(['name' => 'Intermediate']); /* Crea un nivel llamado Intermediate */
        factory(\App\Level::class, 1)->create(['name' => 'Advanced']); /* Crea un nivel llamado Advanced */
        factory(\App\Category::class, 5)->create(); /* Crea 3 categorías aleatorias */
        /*  */
    }
}
