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
    }
}
