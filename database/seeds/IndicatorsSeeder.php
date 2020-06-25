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
        $indicator->IndFicha = 'HSEQ-04 REV.1 ene-20';
        $indicator->IndObjective = '1';
        $indicator->IndFormula = '(No. De capacitación de realizadas/No. Total de Capacitaciones programadas) *100';
        $indicator->IndGraphic = '';
        $indicator->IndTable = '';
        $indicator->IndFrecuencia = 'trimestral';
        $indicator->IndAnalysis = '';
        $indicator->IndType = 0;
        $indicator->IndEfe = 0;
        // $indicator->IndDateFrom = '';
        // $indicator->IndDateUntil = '';
        $indicator->IndMeta = '>80%';
        $indicator->save();


        $indicator = new Indicators();
        $indicator->IndName = 'Ausentismo e impuntualidad';
        $indicator->IndDescripcion = '% de Ausencias de los trabajadores por faltas, permisos o retrasos en cada area de trabajo. Este indicador nos conduce a la motivación de los trabajadores y su compromiso con la Empresa.';
        $indicator->IndFicha = 'HSEQ-04 REV.1 ene-20';
        $indicator->IndObjective = '1';
        $indicator->IndFormula = '(Horas de ausentismo del mes / Horas laborados del mes)* 100';
        $indicator->IndGraphic = '';
        $indicator->IndTable = '';
        $indicator->IndFrecuencia = 'mensual';
        $indicator->IndAnalysis = '';
        $indicator->IndType = 0;
        $indicator->IndEfe = 1;
        // $indicator->IndDateFrom = '';
        // $indicator->IndDateUntil = '';
        $indicator->IndMeta = '<20%';
        $indicator->save();

        $indicator = new Indicators();
        $indicator->IndName = 'Costo Porcentual por Trabajo Suplementario';
        $indicator->IndDescripcion = 'Nos define el costo mensual por empleado, nos permite preveer los gastos de personal para valorar la dimensiòn de la plantilla';
        $indicator->IndFicha = 'HSEQ-04 REV.1 ene-20';
        $indicator->IndObjective = '1';
        $indicator->IndFormula = '(Costo mano de obra suplementario Mensual / Costo total de Mano de Obra Mensual)*100';
        $indicator->IndGraphic = '';
        $indicator->IndTable = '';
        $indicator->IndFrecuencia = 'semestral';
        $indicator->IndAnalysis = '';
        $indicator->IndType = 0;
        $indicator->IndEfe = 1;
        // $indicator->IndDateFrom = '';
        // $indicator->IndDateUntil = '';
        $indicator->IndMeta = 'Sin definir';
        $indicator->save();

        $indicator = new Indicators();
        $indicator->IndName = 'Competencia de Personal';
        $indicator->IndDescripcion = 'Determina el grado de competencia que adquiere un trabajador con las actividades de formaciòn, experiencia y habilidades que la Empresa le ha brindado';
        $indicator->IndFicha = 'HSEQ-04 REV.1 ene-20';
        $indicator->IndObjective = '1';
        $indicator->IndFormula = '(No. De trabajadores competentes frente al perfil del area/ Total de trabajadores del area)*100';
        $indicator->IndGraphic = '';
        $indicator->IndTable = '';
        $indicator->IndFrecuencia = 'semestral';
        $indicator->IndAnalysis = '';
        $indicator->IndType = 0;
        $indicator->IndEfe = 2;
        // $indicator->IndDateFrom = '';
        // $indicator->IndDateUntil = '';
        $indicator->IndMeta = '>90%';
        $indicator->save();
    }
}
