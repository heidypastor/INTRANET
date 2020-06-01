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
        $cargo->CargoName = 'Lider Comunicaciones e Informatica';
        $cargo->save();

        // id = 02
        $cargo = new Cargo();
        $cargo->CargoName = 'Jefe Operaciones';
        $cargo->save();

        // id = 03
        $cargo = new Cargo();
        $cargo->CargoName = 'Director de Planta';
        $cargo->save();

        // id = 04
        $cargo = new Cargo();
        $cargo->CargoName = 'Auxiliar Logistico';
        $cargo->save();

        // id = 05
        $cargo = new Cargo();
        $cargo->CargoName = 'Asistente de Logistica';
        $cargo->save();

        // id = 06
        $cargo = new Cargo();
        $cargo->CargoName = 'Gerente General';
        $cargo->save();

        // id = 07
        $cargo = new Cargo();
        $cargo->CargoName = 'Asesor Comercial';
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
        $cargo->CargoName = 'Supervisor de Turno';
        $cargo->save();

        // id = 13
        $cargo = new Cargo();
        $cargo->CargoName = 'Responsable de Gestión Humana';
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
        $cargo->CargoName = 'Subgerente Comercial';
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
        $cargo->CargoName = 'Ingeniero PDA';
        $cargo->save();

        // id = 21
        $cargo = new Cargo();
        $cargo->CargoName = 'Mecanico';
        $cargo->save();

        // id = 22
        $cargo = new Cargo();
        $cargo->CargoName = 'Aprendiz SENA';
        $cargo->save();

        // id = 23
        $cargo = new Cargo();
        $cargo->CargoName = 'Auditor';
        $cargo->save();

        // id = 24
        $cargo = new Cargo();
        $cargo->CargoName = 'Encargado Almacen';
        $cargo->save();

        // id = 25
        $cargo = new Cargo();
        $cargo->CargoName = 'Jefe Mantenimiento';
        $cargo->save();

        // id = 26
        $cargo = new Cargo();
        $cargo->CargoName = 'Jefe de Logistica';
        $cargo->save();

        // id = 27
        $cargo = new Cargo();
        $cargo->CargoName = 'Asesor HSEQ';
        $cargo->save();

        // id = 28
        $cargo = new Cargo();
        $cargo->CargoName = 'Ingeniero de Tratamiento';
        $cargo->save();

        // id = 29
        $cargo = new Cargo();
        $cargo->CargoName = 'Director de Operaciones';
        $cargo->save();

        // id = 30
        $cargo = new Cargo();
        $cargo->CargoName = 'Asistente Comercial';
        $cargo->save();

        // id = 31
        $cargo = new Cargo();
        $cargo->CargoName = 'Jefe de Tesoreria';
        $cargo->save();

        // id = 32
        $cargo = new Cargo();
        $cargo->CargoName = 'Asesor Juridico';
        $cargo->save();
    }
}
