<?php

use Illuminate\Database\Seeder;
use App\Comites;

class ComitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// id = 01
        $comite = new Comites();
        $comite->ComiName = 'COPASST';
        $comite->ComiSrc = 'white/img/logo.png';
        $comite->ComiImage = 'white/img/logo.png';
        $comite->ComiParaQueSirve = 'Mejorar la comunicaciòn entre los integrantes de la empresa';
        $comite->ComiTelefono = '3222324567';
        $comite->ComiEmail = 'copasst@gmail.com.co';
        $comite->save();
    }
}
