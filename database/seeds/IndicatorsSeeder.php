<?php

use Illuminate\Database\Seeder;
use App\Indicators;

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
        $indicator->IndObjective = '1';
        $indicator->IndQueMide = 'Productividad';
        $indicator->IndGraphic = '';
        $indicator->IndTable = '';
        $indicator->IndFrecuencia = 'mensual';
        $indicator->IndAnalysis = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        // $indicator->IndDateFrom = '2019/12/29';
        // $indicator->IndDateUntil = '2020/01/29';
        $indicator->IndType = 0;
        $indicator->IndMeta = '95%';
        $indicator->save();


        $indicator = new Indicators();
        $indicator->IndName = 'Indicador Logistica';
        $indicator->IndObjective = '1';
        $indicator->IndQueMide = 'Productividad';
        $indicator->IndGraphic = '';
        $indicator->IndTable = '';
        $indicator->IndFrecuencia = 'mensual';
        $indicator->IndAnalysis = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        // $indicator->IndDateFrom = '2019/12/29';
        // $indicator->IndDateUntil = '2020/01/29';
        $indicator->IndType = 1;
        $indicator->IndMeta = '95%';
        $indicator->save();
    }
}
