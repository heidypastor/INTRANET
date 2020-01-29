<?php

use Illuminate\Database\Seeder;
use App\Releases;

class ReleasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $release = new Releases();
        $release->RelName = 'Comunicado Prueba';
        $release->RelMessage = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $release->RelDate = '2020/01/24';
        $release->RelSrc = 'public/Anuncios/dron.jpg';
        $release->RelType = 'Comunicado';
        $release->RelGeneral = 0;
        $release->user_id = 2;
        $release->save();


        $release = new Releases();
        $release->RelName = 'Comunicado Prueba 2';
        $release->RelMessage = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
        $release->RelDate = '2020/01/24';
        $release->RelSrc = 'pulic/Anuncios/dron.jpg';
        $release->RelType = 'Comunicado';
        $release->RelGeneral = 0;
        $release->user_id = 2;
        $release->save();
    }
}
