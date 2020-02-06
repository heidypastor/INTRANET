<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // superusuarios... evita la validación de permisos según gate:before
        // id = 1
        Role::create(['name' => 'Super Admin']);

        /*los siguientes roles requieren validación de permisos*/
        Role::create(['name' => 'Gerente']);  // id = 2
        Role::create(['name' => 'Director']); // id = 3
        Role::create(['name' => 'JefeArea']); // id = 4
        Role::create(['name' => 'User']);     // id = 5
    }
}
