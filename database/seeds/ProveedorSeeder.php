<?php

use Illuminate\Database\Seeder;
use App\Proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Junta Directiva'; 
        $proveedor->ProvType = 'Planear';
        $proveedor->save();

        // id = 02
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Gobierno Nacional'; 
        $proveedor->ProvType = 'Planear';
        $proveedor->save();

        // id = 03
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Procesos PROSARC S.A. ESP'; 
        $proveedor->ProvType = 'Planear';
        $proveedor->save();

        // id = 04
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Gerencia General'; 
        $proveedor->ProvType = 'Planear';
        $proveedor->save();

        // id = 05
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Director de Planta'; 
        $proveedor->ProvType = 'Planear';
        $proveedor->save();

        // id = 06
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Subgerente Comercial'; 
        $proveedor->ProvType = 'Planear';
        $proveedor->save();



        // id = 07
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'PROCESOS PROSARC S.A. ESP'; 
        $proveedor->ProvType = 'Hacer';
        $proveedor->save();



        // id = 08
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Procesos Sistema Integrado de Gestión'; 
        $proveedor->ProvType = 'Verificar';
        $proveedor->save();

        // id = 08
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Autoridad Ambiental Competente'; 
        $proveedor->ProvType = 'Verificar';
        $proveedor->save();



        // id = 09
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Proceso Gestión Estratégica'; 
        $proveedor->ProvType = 'Actuar';
        $proveedor->save();

        // id = 10
        $proveedor = new Proveedor();
        $proveedor->ProvName = 'Proceso Sistema Integrado de Gestión '; 
        $proveedor->ProvType = 'Actuar';
        $proveedor->save();
    }
}

