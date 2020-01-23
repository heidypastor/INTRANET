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
        $process->ProcName = 'Compras';
        $process->ProcRevVersion = '0';
        $process->ProcChangesDescription = 'Actualizado por seeder de procesos';
        $process->ProcImage = 'https://i.picsum.photos/id/475/536/354.jpg';
        $process->ProcObjetivo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $process->ProcElaboro = 'SuperIntendente de planta';
        $process->ProcResponsable = 'SuperIntendente de planta';
        $process->ProcAutoridad = 'Gerente General';
        $process->ProcRecursos = 'oficina, Computador, Tlf, Fax, Vehiculo';
        $process->ProcRequsitos = 'Norma NTC-Iso 9001, Norma NTC-Iso 14001, Norma NTC-Iso 18001';
        $process->ProcReviso = 'Gerente General';
        $process->ProcAprobo = 'Presidencia';
        $process->save();


        // id = 02
        $process = new Process();
        $process->ProcName = 'planificacion';
        $process->ProcRevVersion = '0';
        $process->ProcChangesDescription = 'Actualizado por seeder de procesos';
        $process->ProcImage = 'https://i.picsum.photos/id/475/536/354.jpg';
        $process->ProcObjetivo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $process->ProcElaboro = 'SuperIntendente de planta';
        $process->ProcResponsable = 'SuperIntendente de planta';
        $process->ProcAutoridad = 'Gerente General';
        $process->ProcRecursos = 'oficina, Computador, Tlf, Fax, Vehiculo';
        $process->ProcRequsitos = 'Norma NTC-Iso 9001, Norma NTC-Iso 14001, Norma NTC-Iso 18001';
        $process->ProcReviso = 'Gerente General';
        $process->ProcAprobo = 'Presidencia';
        $process->save();

        // id = 03
        $process = new Process();
        $process->ProcName = 'transporte y recoleccion';
        $process->ProcRevVersion = '0';
        $process->ProcChangesDescription = 'Actualizado por seeder de procesos';
        $process->ProcImage = 'https://i.picsum.photos/id/475/536/354.jpg';
        $process->ProcObjetivo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $process->ProcElaboro = 'SuperIntendente de planta';
        $process->ProcResponsable = 'SuperIntendente de planta';
        $process->ProcAutoridad = 'Gerente General';
        $process->ProcRecursos = 'oficina, Computador, Tlf, Fax, Vehiculo';
        $process->ProcRequsitos = 'Norma NTC-Iso 9001, Norma NTC-Iso 14001, Norma NTC-Iso 18001';
        $process->ProcReviso = 'Gerente General';
        $process->ProcAprobo = 'Presidencia';
        $process->save();


        // id = 04
        $process = new Process();
        $process->ProcName = 'almacen';
        $process->ProcRevVersion = '0';
        $process->ProcChangesDescription = 'Actualizado por seeder de procesos';
        $process->ProcImage = 'https://i.picsum.photos/id/475/536/354.jpg';
        $process->ProcObjetivo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $process->ProcElaboro = 'SuperIntendente de planta';
        $process->ProcResponsable = 'SuperIntendente de planta';
        $process->ProcAutoridad = 'Gerente General';
        $process->ProcRecursos = 'oficina, Computador, Tlf, Fax, Vehiculo';
        $process->ProcRequsitos = 'Norma NTC-Iso 9001, Norma NTC-Iso 14001, Norma NTC-Iso 18001';
        $process->ProcReviso = 'Gerente General';
        $process->ProcAprobo = 'Presidencia';
        $process->save();
    }
}
