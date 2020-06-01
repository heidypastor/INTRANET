<?php

use Illuminate\Database\Seeder;
use App\Gseguridad;

class GseguridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Físico';
        $gseguridad->SeguType = '0'; /*0 = Peligros 1 = Riesgos 2 = Programas asociados al proceso*/
        $gseguridad->save();

        // id = 02
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Químico';
        $gseguridad->SeguType = '0';
        $gseguridad->save();

        // id = 03
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Biológico';
        $gseguridad->SeguType = '0';
        $gseguridad->save();

        // id = 04
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Eléctrico';
        $gseguridad->SeguType = '0';
        $gseguridad->save();

        // id = 05
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Público';
        $gseguridad->SeguType = '0';
        $gseguridad->save();

        // id = 06
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Locativo';
        $gseguridad->SeguType = '0';
        $gseguridad->save();

        // id = 07
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Ergonómico';
        $gseguridad->SeguType = '0';
        $gseguridad->save();

        // id = 08
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Natural ';
        $gseguridad->SeguType = '0';
        $gseguridad->save();

        // id = 09
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Psicosocial';
        $gseguridad->SeguType = '0';
        $gseguridad->save();

        // id = 10
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Lesiones';
        $gseguridad->SeguType = '1';
        $gseguridad->save();

        // id = 11
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Enfermedades';
        $gseguridad->SeguType = '1';
        $gseguridad->save();

        // id = 12
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Programa Estilos de vida y trabajo saludable';
        $gseguridad->SeguType = '2';
        $gseguridad->save();

        // id = 13
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Programa de Seguridad Industrial';
        $gseguridad->SeguType = '2';
        $gseguridad->save();

        // id = 14
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Programa de Higiene Industrial';
        $gseguridad->SeguType = '2';
        $gseguridad->save();

        // id = 15
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Programa de Medicina Preventiva y del Trabajo';
        $gseguridad->SeguType = '2';
        $gseguridad->save();
    }
}
