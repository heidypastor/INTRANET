<?php

use Illuminate\Database\Seeder;

class IndicatorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indicator = new Indicators();
        $indicator->IndName = 'Indicador Sistemas';
        $indicator->IndObjective = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		      	  tempor incididunt ut labore et dolore magna aliqua.';
        $indicator->IndQueMide = 'Productividad';
        $indicator->IndGraphic = '/white/img/grafica.jpg';
        $indicator->IndTable = '/white/img/tabla.jpg';
        $indicator->IndAnalysis = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.';
        $indicator->IndDateFrom = '23/12/2019';
        $indicator->IndDateUntil = '23/01/2020';
        $indicator->save();


        $indicator = new Indicators();
        $indicator->IndName = 'Indicador Logistica';
        $indicator->IndObjective = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.';
        $indicator->IndQueMide = 'Productividad';
        $indicator->IndGraphic = '/white/img/grafica.jpg';
        $indicator->IndTable = '/white/img/tabla.jpg';
        $indicator->IndAnalysis = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.';
        $indicator->IndDateFrom = '23/12/2019';
        $indicator->IndDateUntil = '23/01/2020';
        $indicator->save();   


        $indicator = new Indicators();
        $indicator->IndName = 'Indicador Operaciones';
        $indicator->IndObjective = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.';
        $indicator->IndQueMide = 'Productividad';
        $indicator->IndGraphic = '/white/img/grafica.jpg';
        $indicator->IndTable = '/white/img/tabla.jpg';
        $indicator->IndAnalysis = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.';
        $indicator->IndDateFrom = '23/12/2019';
        $indicator->IndDateUntil = '23/01/2020';
        $indicator->save();

    }
}
