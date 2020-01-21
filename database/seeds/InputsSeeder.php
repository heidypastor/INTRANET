<?php

use Illuminate\Database\Seeder;
use App\Inputs;

class InputsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $input = new Inputs();
        $input->InputName = 'requisicion de bienes y servicios';
        $input->save();

        // id = 02
        $input = new Inputs();
        $input->InputName = 'Solicitud de eleaboraciones y/o modificaciones de contratos';
        $input->save();

        // id = 03
        $input = new Inputs();
        $input->InputName = 'Normas de trabajo';
        $input->save();
    }
}
