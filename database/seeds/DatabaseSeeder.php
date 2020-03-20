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
        $this->call([AreasSeeder::class]);
        $this->call([CargoSeeder::class]);
        $this->call([RolesTableSeeder::class]);
        $this->call([permissionsTableSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([ComitesSeeder::class]);
        $this->call([IndicatorsSeeder::class]);
        $this->call([DocumentsSeeder::class]);
        $this->call([ActivitiesSeeder::class]);
        $this->call([OutputsSeeder::class]);
        $this->call([InputsSeeder::class]);
        $this->call([ReleasesSeeder::class]);
        $this->call([RequisitosSeeder::class]);
        $this->call([AlertsSeeder::class]);
        $this->call([RecursosSeeder::class]);
        $this->call([ProveedorSeeder::class]);
        $this->call([RecursosSeeder::class]);
        $this->call([GambientalSeeder::class]);
        $this->call([GseguridadSeeder::class]);
        $this->call([ClienteSeeder::class]);
        $this->call([ProcessesSeeder::class]);
    }
}
