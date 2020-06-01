<?php

use Illuminate\Database\Seeder;
use App\Input;

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
        $input = new Input();
        $input->InputName = 'requisicion de bienes y servicios';
        $input->save();

        // id = 02
        $input = new Input();
        $input->InputName = 'Solicitud de eleaboraciones y/o modificaciones de contratos';
        $input->save();

        // id = 03
        $input = new Input();
        $input->InputName = 'Normas de trabajo';
        $input->save();

        // id = 04
        $input = new Input();
        $input->InputName = 'Políticas Nacionales e Internacionales en materia Ambiental';
        $input->InputType = 'Planear';
        $input->save();

        // id = 05
        $input = new Input();
        $input->InputName = 'Leyes y normatividad';
        $input->InputType = 'Planear';
        $input->save();

        // id = 06
        $input = new Input();
        $input->InputName = 'Plan de Acción por Áreas';
        $input->InputType = 'Planear';
        $input->save(); 

        // id = 07
        $input = new Input();
        $input->InputName = 'Plan Presupuestal del año anterior';
        $input->InputType = 'Planear';
        $input->save();

        // id = 08
        $input = new Input();
        $input->InputName = 'Evaluación del Plan de Acción';
        $input->InputType = 'Planear';
        $input->save();

        // id = 09
        $input = new Input();
        $input->InputName = 'Evaluaciones y Auditorías Realizadas';
        $input->InputType = 'Planear';
        $input->save();

        // id = 10
        $input = new Input();
        $input->InputName = 'Resultados de Indicadores';
        $input->InputType = 'Planear';
        $input->save();

        // id = 11
        $input = new Input();
        $input->InputName = 'Lineamientos Estratégicos para la planeación y gestión de la Empresa';
        $input->InputType = 'Hacer';
        $input->save();

        // id = 12
        $input = new Input();
        $input->InputName = 'Informes de seguimiento a la ejecución de los instrumentos de planeación de la Empresa';
        $input->InputType = 'Verificar';
        $input->save();

        // id = 13
        $input = new Input();
        $input->InputName = 'Informes de Auditoría';
        $input->InputType = 'Verificar';
        $input->save();

        // id = 14
        $input = new Input();
        $input->InputName = 'Informes de Evaluación de los resultados arrojados en las visitas';
        $input->InputType = 'Verificar';
        $input->save();

        // id = 15
        $input = new Input();
        $input->InputName = 'Informes de Evaluación de Gestión y Resultados';
        $input->InputType = 'Verificar';
        $input->save();

        // id = 16
        $input = new Input();
        $input->InputName = 'Informe de Gestión';
        $input->InputType = 'Actuar';
        $input->save();

        // id = 17
        $input = new Input();
        $input->InputName = 'Informe de Medición de la Efectividad de las acciones del evaluador independiente al plan de mejoramiento del proceso';
        $input->InputType = 'Actuar';
        $input->save();
    }
}
