<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $cliente = new Cliente();
        $cliente->CliName = 'Procesos PROSARC S.A. ESP.';
        $cliente->CliType = '';
        $cliente->save();

        // id = 02
        $cliente = new Cliente();
        $cliente->CliName = 'Junta Directiva';
        $cliente->CliType = '';
        $cliente->save();

        // id = 03
        $cliente = new Cliente();
        $cliente->CliName = 'Procesos Sistema Integrado de Gestión ';
        $cliente->CliType = '';
        $cliente->save();

        // id = 04
        $cliente = new Cliente();
        $cliente->CliName = 'Partes Interesadas';
        $cliente->CliType = '';
        $cliente->save();
    }
}
