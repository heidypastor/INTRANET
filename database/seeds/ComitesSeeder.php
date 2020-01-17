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
        $comite->ComiSrc = 'public/Comites/yndb0QS4KNxW4yYzIkOcJNu0zCnStdUPZ4hjZuGo.jpeg';
        $comite->ComiImage = 'public/Comites/yndb0QS4KNxW4yYzIkOcJNu0zCnStdUPZ4hjZuGo.jpeg';
        $comite->ComiParaQueSirve = 'Mejorar la comunicaciòn entre los integrantes de la empresa';
        $comite->ComiTelefono = '3222324567';
        $comite->ComiEmail = 'copasst@gmail.com.co';
        $comite->save();


        // id = 02
        $comite = new Comites();
        $comite->ComiName = 'Brigadistas';
        $comite->ComiSrc = 'public/Comites/yndb0QS4KNxW4yYzIkOcJNu0zCnStdUPZ4hjZuGo.jpeg';
        $comite->ComiImage = 'public/Comites/yndb0QS4KNxW4yYzIkOcJNu0zCnStdUPZ4hjZuGo.jpeg';
        $comite->ComiParaQueSirve = 'Mejorar la comunicaciòn entre los integrantes de la empresa';
        $comite->ComiTelefono = '3122244567';
        $comite->ComiEmail = 'brigada@gmail.com.co';
        $comite->save();
    }
}
