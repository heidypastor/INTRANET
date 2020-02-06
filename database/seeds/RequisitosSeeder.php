<?php

use Illuminate\Database\Seeder;
use App\Requisitos;

class RequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    			// Id = 01
        $requisito = new Requisitos();
        $requisito->ReqName = 'Requisito #1';
        $requisito->ReqType = 'Prueba';
        $requisito->ReqDate = '2020/03/01';
        $requisito->ReqEnte = 'Prueba';
        $requisito->ReqQueDice = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $requisito->save();


        		// Id = 02
        $requisito = new Requisitos();
        $requisito->ReqName = 'Requisito #2';
        $requisito->ReqType = 'Prueba';
        $requisito->ReqDate = '2020/03/01';
        $requisito->ReqEnte = 'Prueba';
        $requisito->ReqQueDice = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $requisito->save();
    }
}