<?php

use Illuminate\Database\Seeder;
use App\Process;

class ProcessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $process = new Process();
        $process->ProcName = 'GESTIÓN ESTRATEGICA';
        $process->ProcRevVersion = '1';
        /*$process->ProcChangesDescription = '';*/
        $process->ProcImage = '';
        $process->ProcObjetivo = 'Establecer los lineamientos estratégicos que orienten y guíen la gestión de PROSARC S.A ESP, para garantizar el cumplimiento de la Misión y la Visión en el marco de la normatividad vigente.';
        $process->ProcElaboro = 'Grupo Asesor';
        $process->ProcResponsable = ['Gerente General', 'Subgerente Comercial', 'Director de Operaciones', 'Director de Planta'];
        $process->ProcAmbienTrabajo = 'Condiciones ergonómicas adecuadas en las oficinas y seguras - Condiciones de elementos de protección y seguridad para la planta';
        $process->ProcAlcance = 'Inicia con el análisis situacional de PROSARC S.A. ESP, continúa con la definición de lineamientos estratégicos, su despliegue, ejecución y termina con el seguimiento, evaluación, retroalimentación y acciones de mejora.';
        $process->ProcAutoridad = 'Gerente General';
        $process->ProcReviso = 'Asesor HSEQ';
        $process->ProcAprobo = 'Gerente General';
        $process->ProcPolitOperacion = ['Atendiendo los parámetros establecidos en la legislación y normatividad en materia en ambiental y Empresarial, la Gerencia elaborará los lineamientos estratégicos que orienten la formulación, implementación y evaluación de los instrumentos de planeación de la Empresa para garantizar el cumplimiento de la Misión y la Visión de PROSARC S.A. ESP.', 'Se debe garantizar que en la formulación de los instrumentos de planeación de PROSARC S.A. ESP, se tengan en cuenta de manera expresa, los lineamientos Estratégicos emitidos por la Junta Directiva y el Gerente General', 'Para la formulación de los instrumentos de Planeación de PROSARC S.A. ESP, se deberá verificar la vigencia y validez de los “normagramas” de los diferentes procesos y realizar un sondeo normativo que garantice la vigencia de la base legal del instrumento adoptado'];
        $process->ProcDate = '2020/01/29';
        $process->ProcRiesgos = ['Instrumentos de planeación formulados a partir de normatividad no vigente', 'Instrumentos de planeación formulados sin tener en cuenta los lineamientos estratégicos de PROSARC S.A. ESP'];
        $process->save();
        $process->salidas()->sync(['3', '4', '5', '6', '7', '8', '9', '10']);
        $process->entradas()->sync(['4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17']);
        $process->proveedores()->sync(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']);
        $process->recursos()->sync(['6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16']);
        $process->clientes()->sync(['1', '2', '3', '4']);
        $process->gambientals()->sync(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11']);
        $process->gseguridads()->sync(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']);
        $process->actividades()->sync(['4', '5', '6', '7', '8', '9']);
    }
}
