<?php

use Illuminate\Database\Seeder;
use App\Recursos;

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

        // id = 06
        $recurso = new Recursos();
        $recurso->RecName = 'Instalaciones';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 07
        $recurso = new Recursos();
        $recurso->RecName = 'Equipo de Oficina';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 08
        $recurso = new Recursos();
        $recurso->RecName = 'Hardware y Sofware';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 09
        $recurso = new Recursos();
        $recurso->RecName = 'Sistema de Información de PROSARC S.A. ESP.';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 10
        $recurso = new Recursos();
        $recurso->RecName = 'Gerente General';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 1
        $recurso = new Recursos();
        $recurso->RecName = 'Subgerente Comercial';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 12
        $recurso = new Recursos();
        $recurso->RecName = 'Asesor';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 13
        $recurso = new Recursos();
        $recurso->RecName = 'Jefes de Áreas';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 14
        $recurso = new Recursos();
        $recurso->RecName = 'Técnicos';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 15
        $recurso = new Recursos();
        $recurso->RecName = 'Secretario Ejecutiva';
        $recurso->RecType = '1';
        $recurso->save();
        
        // id = 16
        $recurso = new Recursos();
        $recurso->RecName = 'Director de Planta';
        $recurso->RecType = '1';
        $recurso->save();
    }
}
