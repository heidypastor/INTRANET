<?php

use Illuminate\Database\Seeder;
use App\Activity;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $activity = new Activity();
        $activity->ActiName = 'Evaluacion de provedores y subcontratistas';
        $activity->save();

        // id = 02
        $activity = new Activity();
        $activity->ActiName = 'solicitud y analisis de cotizaciones';
        $activity->save();

        // id = 03
        $activity = new Activity();
        $activity->ActiName = 'Elaboracion de terminos de referencia para licitaciones';
        $activity->save();

        // id = 04
        $activity = new Activity();
        $activity->ActiName = 'Analizar la información y documentación de producción y comercial, el rendimiento, los indicadores de producción y los gastos del año anterior, para elaborar los Lineamientos de la Junta Directiva que oriente la planeación y gestión de PROSARC S.A. ESP.';
        $activity->ActiType = 'Planear';
        $activity->save();

        // id = 05
        $activity = new Activity();
        $activity->ActiName = 'Formular los Instrumentos de Planeación de la Empresa';
        $activity->ActiType = 'Hacer';
        $activity->save();

        // id = 06
        $activity = new Activity();
        $activity->ActiName = 'Evaluar y hacer seguimiento al cumplimiento de los Instrumentos de la Empresa';
        $activity->ActiType = 'Verificar';
        $activity->save();

        // id = 07
        $activity = new Activity();
        $activity->ActiName = 'Analizar la información para la toma de decisiones y el establecimiento de las acciones correctivas y preventivas';
        $activity->ActiType = 'Verificar';
        $activity->save();

        // id = 08
        $activity = new Activity();
        $activity->ActiName = 'Implementar las Acciones de Mejora';
        $activity->ActiType = 'Actuar';
        $activity->save();

        // id = 09
        $activity = new Activity();
        $activity->ActiName = 'Implementar las Acciones de Mejora';
        $activity->ActiType = 'Actuar';
        $activity->save();
    }
}
