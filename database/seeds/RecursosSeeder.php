<?php

use Illuminate\Database\Seeder;

class RecursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $recurso = new Recursos();
        $recurso->RecName = 'Computador';
        $recurso->RecType = '0'; /* 0->fisico 1->humano 2->financiero */
        $recurso->save();

        // id = 02
        $recurso = new Recursos();
        $recurso->RecName = 'Celular';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 03
        $recurso = new Recursos();
        $recurso->RecName = 'Oficina';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 04
        $recurso = new Recursos();
        $recurso->RecName = 'Herramientas';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 05
        $recurso = new Recursos();
        $recurso->RecName = 'Formatos';
        $recurso->RecType = '0';
        $recurso->save();
    }
}
