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
        $indicator->IndName = 'Cumplimiento del Plan de Capacitación';
        $indicator->IndDescripcion = 'El indicador nos permite establecer el cumplimiento de las actividades de capacitación programadas en un periodo establecido';
        $indicator->IndObjective = '1';
        $indicator->IndFormula = '(No. De capacitación de realizadas/No. Total de Capacitaciones programadas) *100	';
        $indicator->IndGraphic = '';
        $indicator->IndTable = '';
        $indicator->IndFrecuencia = 'mensual';
        $indicator->IndAnalysis = '';
        $indicator->IndType = 0;
        $indicator->IndMeta = '95%';
        $indicator->save();


        $indicator = new Indicators();
        $indicator->IndName = 'Indicador Logistica';
        $indicator->IndObjective = '1';
        $indicator->IndDescripcion = 'Productividad';
        $indicator->IndGraphic = '';
        $indicator->IndTable = '';
        $indicator->IndFrecuencia = 'mensual';
        $indicator->IndAnalysis = '';
        $indicator->IndType = 1;
        $indicator->IndMeta = '95%';
        $indicator->save();
    }
}
