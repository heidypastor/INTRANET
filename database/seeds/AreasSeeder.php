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

        // id = 01
        $area = new Areas();
        $area->AreaName = 'Comunicaciones e Informatica';
        $area->AreaSede = 'Planta';
        $area->save();

        // id = 02
        $area = new Areas();
        $area->AreaName = 'Logistica';
        $area->AreaSede = 'Planta';
        $area->save(); 

        // id = 03
        $area = new Areas();
        $area->AreaName = 'Óperaciones';
        $area->AreaSede = 'Planta';
        $area->save(); 

        // id = 04
        $area = new Areas();
        $area->AreaName = 'Mantenimiento';
        $area->AreaSede = 'Planta';
        $area->save();

        // id = 05
        $area = new Areas();
        $area->AreaName = 'Direccion Planta';
        $area->AreaSede = 'Planta';
        $area->save();  

        // id = 06
        $area = new Areas();
        $area->AreaName = 'Hseq';
        $area->AreaSede = 'Planta';
        $area->save();     

        // id = 07
        $area = new Areas();
        $area->AreaName = 'Almacen';
        $area->AreaSede = 'Planta';
        $area->save();  

        // id = 08
        $area = new Areas();
        $area->AreaName = 'Subgerencia';
        $area->AreaSede = 'Bogotá';
        $area->save(); 

        // id = 09
        $area = new Areas();
        $area->AreaName = 'Gerencia';
        $area->AreaSede = 'Bogotá';
        $area->save();   

        // id = 10
        $area = new Areas();
        $area->AreaName = 'Comercial';
        $area->AreaSede = 'Bogotá';
        $area->save();

        // id = 11
        $area = new Areas();
        $area->AreaName = 'Tesoreria';
        $area->AreaSede = 'Bogotá';
        $area->save();

        // id = 12
        $area = new Areas();
        $area->AreaName = 'PDA';
        $area->AreaSede = 'Planta';
        $area->save();

        // id = 13
        $area = new Areas();
        $area->AreaName = 'Gestión Humana';
        $area->AreaSede = 'Planta';
        $area->save();

    }
}
