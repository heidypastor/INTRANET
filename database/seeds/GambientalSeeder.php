<?php

use Illuminate\Database\Seeder;
use App\Gambiental;

class GambientalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// id = 01
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Consumo de Energía';
        $gambiental->GesType = '0'; /*0 = Aspectos Ambientales  1 = Impactos Ambientales 2 = Programas asociados al proceso*/
        $gambiental->save();

        // id = 02
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Consumo de Insumos de Oficina y Papel';
        $gambiental->GesType = '0';
        $gambiental->save();

        // id = 03
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Generación de Residuos Sólidos, Sólidos Reciclables, Ordinarios y Biodegradables';
        $gambiental->GesType = '0';
        $gambiental->save();

        // id = 04
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Generación de Residuos Peligrosos';
        $gambiental->GesType = '0';
        $gambiental->save();

        // id = 05
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Agotamiento de Recursos Naturales';
        $gambiental->GesType = '1';
        $gambiental->save();

        // id = 06
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Contaminación de Suelos';
        $gambiental->GesType = '1';
        $gambiental->save();

        // id = 07
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Contaminación de Agua';
        $gambiental->GesType = '1';
        $gambiental->save();

        // id = 08
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Contaminación Aire';
        $gambiental->GesType = '1';
        $gambiental->save();

        // id = 09
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Programa de ahorro y uso eficiente de Energía';
        $gambiental->GesType = '2';
        $gambiental->save();

        // id = 10
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Consumo Responsable del papel';
        $gambiental->GesType = '2';
        $gambiental->save();

        // id = 11
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Programa de Gestión de Residuos Sólidos';
        $gambiental->GesType = '2';
        $gambiental->save();
    }
}
