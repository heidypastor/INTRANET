<?php

use Illuminate\Database\Seeder;
use App\Output;

class OutputsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $output = new Output();
        $output->OutputName = 'Suministro de bienes / servicios acordes con los requerimientos';
        $output->save();

        // id = 02
        $output = new Output();
        $output->OutputName = 'Minimizacion de los riesgos e impactos ambientales';
        $output->save();

        // id = 03
        $output = new Output();
        $output->OutputName = 'Lineamientos Estratégicos para la planeación y gestión de PROSARC S.A ESP';
        $output->OutputType = 'Planear';
        $output->save();

        // id = 04
        $output = new Output();
        $output->OutputName = 'Instrumentos de Planeación Aprobados';
        $output->OutputType = 'Hacer';
        $output->save();

        // id = 05
        $output = new Output();
        $output->OutputName = 'Actas de Comité de la Gerencia General con Subgerencia Comercial y Director de Planta';
        $output->OutputType = 'Verificar';
        $output->save();

        // id = 06
        $output = new Output();
        $output->OutputName = 'Acta de Reunión con la Junta Directiva Mejoramiento';
        $output->OutputType = 'Verificar';
        $output->save();

        // id = 07
        $output = new Output();
        $output->OutputName = 'Actas de Comité de la Gerencia General con Subgerente Comercial y Director de Planta';
        $output->OutputType = 'Verificar';
        $output->save();

        // id = 08
        $output = new Output();
        $output->OutputName = 'Actas de Reunión con el Grupo HSEQ';
        $output->OutputType = 'Verificar';
        $output->save();

        // id = 09
        $output = new Output();
        $output->OutputName = 'Informe de Cumplimiento de los Instrumentos de Planeación';
        $output->OutputType = 'Actuar';
        $output->save();

        // id = 10
        $output = new Output();
        $output->OutputName = 'Informe de Cierre del Plan de Mejoramiento del proceso';
        $output->OutputType = 'Actuar';
        $output->save();
    }
}
