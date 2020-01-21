<?php

use Illuminate\Database\Seeder;
use App\Outputs;

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
        $output = new Outputs();
        $output->OutputName = 'Suministro de bienes / servicios acordes con los requerimientos';
        $output->save();

        // id = 02
        $output = new Outputs();
        $output->OutputName = 'Minimizacion de los riesgos e impactos ambientales';
        $input->save();
    }
}
