<?php

use Illuminate\Database\Seeder;
use App\Areas;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new Areas();
        $area->AreaName = 'Sistemas';
        $area->AreaSede = 'Planta';
        $area->save();        
    }
}
