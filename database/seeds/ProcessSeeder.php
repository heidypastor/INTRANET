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
        $process->ProcParticipantes = ['Gerente General'];
        // $process->ProcRecursos = 'oficina, Computador, Tlf, Fax, Vehiculo';
        $process->ProcReviso = 'Asesor HSEQ';
        $process->ProcAprobo = 'Gerente General';
        $process->ProcPolitOperacion = ['Atendiendo los parámetros establecidos en la legislación y normatividad en materia en ambiental y Empresarial, la Gerencia elaborará los lineamientos estratégicos que orienten la formulación, implementación y evaluación de los instrumentos de planeación de la Empresa para garantizar el cumplimiento de la Misión y la Visión de PROSARC S.A. ESP.', 'Se debe garantizar que en la formulación de los instrumentos de planeación de PROSARC S.A. ESP, se tengan en cuenta de manera expresa, los lineamientos Estratégicos emitidos por la Junta Directiva y el Gerente General', 'Para la formulación de los instrumentos de Planeación de PROSARC S.A. ESP, se deberá verificar la vigencia y validez de los “normagramas” de los diferentes procesos y realizar un sondeo normativo que garantice la vigencia de la base legal del instrumento adoptado'];
        $process->ProcDate = '2020/01/29';
        $process->ProcRiesgos = ['Instrumentos de planeación formulados a partir de normatividad no vigente', 'Instrumentos de planeación formulados sin tener en cuenta los lineamientos estratégicos de PROSARC S.A. ESP'];
        // $process->ProcRequsitos = 'Norma NTC-Iso 9001, Norma NTC-Iso 14001, Norma NTC-Iso 18001';
        $process->save();



        // id = 02
        $process = new Process();
        $process->ProcName = 'GESTION DEL TALENTO HUMANO';
        $process->ProcRevVersion = 'HSEQ-04 - REV. 1 - Ene 20';
        $process->ProcChangesDescription = 'Actualizado por seeder de procesos';
        $process->ProcImage = 'https://i.picsum.photos/id/475/536/354.jpg';
        $process->ProcObjetivo = 'Planear, organizar, ejecutar y controlar las acciones tendientes a la vinculación, evaluación y retiro del personal  de planta y temporal   contribuyendo al desarrollo de sus potencialidades, destrezas y habilidades  encaminadas al fortalecimiento continuo de las competencias, mejoramiento del clima organizacional y bienestar, reconociendo los derechos laborales, promoviendo los valores y principios éticos dentro del marco costitucional y legal, que contribuya al logro de las metas de PROSARC S.A ESP.';
        $process->ProcElaboro = 'SuperIntendente de planta';
        $process->ProcResponsable = ['Jefe de Talento Humano'];
        $process->ProcAmbienTrabajo = 'Ambiente de Trabajo de ejemplo maximo 500 caracteres';
        $process->ProcAlcance = 'Inicia con la gestión para la  vinculación de personal ya sea de forma directa o por la temporal, de acuerdo a la estructura administrativa de PROSARC S.A ESP; continúa con la capacitación a los trabajadores, según la necesidad de la Empresa, entrenamiento, estímulos, seguridad y salud en el trabajo, compensaciones, evaluación de desempeño, administración de las historias laborales, procesos disciplinarios, liquidación de nomina, trámites de incapacidades, licencias, permisos y vacaciones, actividades enmarcadas en el reglamento Interno de Trabajo y termina con el retiro definitivo del trabajador.';
        $process->ProcParticipantes = ['Gerente General'];
        // $process->ProcRecursos = 'oficina, Computador, Tlf, Fax, Vehiculo';
        $process->ProcPolitOperacion = ["oficina", "Computador", "Tlf", "Fax", "Vehiculo"];
        // $process->ProcRequsitos = 'Norma NTC-Iso 9001, Norma NTC-Iso 14001, Norma NTC-Iso 18001';
        $process->ProcReviso = 'Gerente General';
        $process->ProcAprobo = 'Presidencia';
        $process->ProcRiesgos = ['Instrumentos de planeación formulados a partir de normatividad no vigente', 'Instrumentos de planeación formulados sin tener en cuenta los lineamientos estratégicos de PROSARC S.A. ESP'];

        $process->save();

        // id = 03
        $process = new Process();
        $process->ProcName = 'transporte y recoleccion';
        $process->ProcRevVersion = '0';
        $process->ProcChangesDescription = 'Actualizado por seeder de procesos';
        $process->ProcImage = 'https://i.picsum.photos/id/475/536/354.jpg';
        $process->ProcObjetivo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $process->ProcElaboro = 'SuperIntendente de planta';
        $process->ProcResponsable = ['gerencia@prosarc.com.co', 'usuariox'];
        $process->ProcAmbienTrabajo = 'Ambiente de Trabajo de ejemplo maximo 500 caracteres';
        $process->ProcAlcance = 'Alcance de Trabajo de ejemplo maximo 500 caracteres';
        $process->ProcParticipantes = ['Gerente General'];
        // $process->ProcRecursos = 'oficina, Computador, Tlf, Fax, Vehiculo';
        $process->ProcPolitOperacion = ["oficina", "Computador", "Tlf", "Fax", "Vehiculo"];
        // $process->ProcRequsitos = 'Norma NTC-Iso 9001, Norma NTC-Iso 14001, Norma NTC-Iso 18001';
        $process->ProcReviso = 'Gerente General';
        $process->ProcAprobo = 'Presidencia';
        $process->ProcRiesgos = ['Instrumentos de planeación formulados a partir de normatividad no vigente', 'Instrumentos de planeación formulados sin tener en cuenta los lineamientos estratégicos de PROSARC S.A. ESP'];

        $process->save();


        // id = 04
        $process = new Process();
        $process->ProcName = 'almacen';
        $process->ProcRevVersion = '0';
        $process->ProcChangesDescription = 'Actualizado por seeder de procesos';
        $process->ProcImage = 'https://i.picsum.photos/id/475/536/354.jpg';
        $process->ProcObjetivo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $process->ProcElaboro = 'SuperIntendente de planta';
        $process->ProcResponsable = ['gerencia@prosarc.com.co', 'usuariox'];
        $process->ProcAmbienTrabajo = 'Ambiente de Trabajo de ejemplo maximo 500 caracteres';
        $process->ProcAlcance = 'Alcance de Trabajo de ejemplo maximo 500 caracteres';
        $process->ProcParticipantes = ['Gerente General'];
        // $process->ProcRecursos = 'oficina, Computador, Tlf, Fax, Vehiculo';
        $process->ProcPolitOperacion = ["oficina", "Computador", "Tlf", "Fax", "Vehiculo"];
        // $process->ProcRequsitos = 'Norma NTC-Iso 9001, Norma NTC-Iso 14001, Norma NTC-Iso 18001';
        $process->ProcReviso = 'Gerente General';
        $process->ProcAprobo = 'Presidencia';
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
        $process->requisitos()->sync(['1', '2', '3', '4', '5', '6']);
    }
}
