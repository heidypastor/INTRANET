<?php

use Illuminate\Database\Seeder;
use App\Cargo;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $cargo = new Cargo();
        $cargo->CargoName = 'Lider';
        $cargo->save();

        // id = 02
        $cargo = new Cargo();
        $cargo->CargoName = 'Jefe';
        $cargo->save();

        // id = 03
        $cargo = new Cargo();
        $cargo->CargoName = 'Director';
        $cargo->save();

        // id = 04
        $cargo = new Cargo();
        $cargo->CargoName = 'Auxiliar';
        $cargo->save();

        // id = 05
        $cargo = new Cargo();
        $cargo->CargoName = 'Asistente';
        $cargo->save();

        // id = 06
        $cargo = new Cargo();
        $cargo->CargoName = 'Gerente';
        $cargo->save();

        // id = 07
        $cargo = new Cargo();
        $cargo->CargoName = 'Asesor';
        $cargo->save();

        // id = 08
        $cargo = new Cargo();
        $cargo->CargoName = 'Operario';
        $cargo->save();

        // id = 09
        $cargo = new Cargo();
        $cargo->CargoName = 'Montacarguista';
        $cargo->save();

        // id = 10
        $cargo = new Cargo();
        $cargo->CargoName = 'Hornero';
        $cargo->save();

        // id = 11
        $cargo = new Cargo();
        $cargo->CargoName = 'Seguridad';
        $cargo->save();

        // id = 12
        $cargo = new Cargo();
        $cargo->CargoName = 'Supervisor';
        $cargo->save();

        // id = 13
        $cargo = new Cargo();
        $cargo->CargoName = 'Gestor';
        $cargo->save();

        // id = 14
        $cargo = new Cargo();
        $cargo->CargoName = 'Conductor';
        $cargo->save();

        // id = 15
        $cargo = new Cargo();
        $cargo->CargoName = 'Oficios Varios';
        $cargo->save();

        // id = 16
        $cargo = new Cargo();
        $cargo->CargoName = 'Representante';
        $cargo->save();

        // id = 17
        $cargo = new Cargo();
        $cargo->CargoName = 'Subgerente';
        $cargo->save();

        // id = 18
        $cargo = new Cargo();
        $cargo->CargoName = 'Tecnico';
        $cargo->save();

        // id = 19
        $cargo = new Cargo();
        $cargo->CargoName = 'Tecnologo';
        $cargo->save();

        // id = 20
        $cargo = new Cargo();
        $cargo->CargoName = 'Ingeniero';
        $cargo->save();

        // id = 21
        $cargo = new Cargo();
        $cargo->CargoName = 'Mecanico';
        $cargo->save();

        // id = 22
        $cargo = new Cargo();
        $cargo->CargoName = 'Aprendiz';
        $cargo->save();

        // id = 23
        $cargo = new Cargo();
        $cargo->CargoName = 'Auditor';
        $cargo->save();
    }
}
