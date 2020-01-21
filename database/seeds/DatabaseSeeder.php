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
        $this->call([UsersTableSeeder::class]);
        $this->call([ComitesSeeder::class]);
        $this->call([IndicatorsSeeder::class]);
        $this->call([DocumentsSeeder::class]);
        $this->call([ActivitiesSeeder::class]);
        $this->call([OutputsSeeder::class]);
        $this->call([InputsSeeder::class]);
    }
}
