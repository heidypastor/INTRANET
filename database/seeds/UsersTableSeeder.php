<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'Luis De la hoz';
        $admin->email = 'Sistemas@prosarc.com.co';
        $admin->email_verified_at = now();
        $admin->password = bcrypt('secret');
        $admin->Avatar = 'robot400x400.gif';
        $admin->ColorUser = 1;
        $admin->areas_id = 1;
        $admin->save();
        $admin->assignRole('Super Admin');
        $admin->cargos()->sync('1');

        $admin = new User();
        $admin->name = 'Heidy Pastor';
        $admin->email = 'Sistemas2@prosarc.com.co';
        $admin->email_verified_at = now();
        $admin->password = bcrypt('secret');
        $admin->Avatar = 'robot400x400.gif';
        $admin->ColorUser = 2;
        $admin->areas_id = 1;
        $admin->save();
        $admin->assignRole('Super Admin');
        $admin->cargos()->sync('22');


        $user = new User();
        $user->name = 'Victor Velasco';
        $user->email = 'dirtecnica@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 3;
        $user->save();
        $user->assignRole('JefeArea');
        $user->cargos()->sync('29');

        $user = new User();
        $user->name = 'Jhon Gonzales';
        $user->email = 'logistica@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 2;
        $user->save();
        $user->assignRole('JefeArea');
        $user->cargos()->sync('26');

        $user = new User();
        $user->name = 'Duvan Campos';
        $user->email = 'asistentelogistica@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 2;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('5');

        $user = new User();
        $user->name = 'Alejandro Gamba';
        $user->email = 'auxiliarlogistico@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 2;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('4');

        $user = new User();
        $user->name = 'Andres Moreno';
        $user->email = 'gestionhumana@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 13;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('13');

        $user = new User();
        $user->name = 'Andres Moreno';
        $user->email = 'recepcionpda@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 12;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('20');

        $user = new User();
        $user->name = 'David Pizza';
        $user->email = 'gerenteplanta@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 5;
        $user->save();
        $user->assignRole('Director');
        $user->cargos()->sync('3');

        $user = new User();
        $user->name = 'Camilo Triviño';
        $user->email = 'ingtratamiento1@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 3;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('28');

        $user = new User();
        $user->name = 'Andrea Solano';
        $user->email = 'ingtratamiento3@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 3;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('28');

        $user = new User();
        $user->name = 'William Cendales';
        $user->email = 'ingtratamiento2@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 3;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('28');

        $user = new User();
        $user->name = 'Orlando Pinillos';
        $user->email = 'subgerencia@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('JefeArea');
        $user->cargos()->sync('17');

        $user = new User();
        $user->name = 'Maria Molano';
        $user->email = 'CuentasCorporativas@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('7');

        $user = new User();
        $user->name = 'Lorena Cardenas';
        $user->email = 'Comercial2@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('7');

        $user = new User();
        $user->name = 'Briyith Rodriguez';
        $user->email = 'Comercial1@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('7');

        $user = new User();
        $user->name = 'Miguel Martinez';
        $user->email = 'Comercial3@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('7');

        $user = new User();
        $user->name = 'Cesar Sarmiento';
        $user->email = 'Comercial4@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('7');

        $user = new User();
        $user->name = 'Lady Céspedes';
        $user->email = 'servicomercial@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('30');

        $user = new User();
        $user->name = 'Nidia Zorillo';
        $user->email = 'Gestion@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 11;
        $user->save();
        $user->assignRole('JefeArea');
        $user->cargos()->sync('31');

        $user = new User();
        $user->name = 'Andres Cardenas';
        $user->email = 'gerencia@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 9;
        $user->save();
        $user->assignRole('Gerente');
        $user->cargos()->sync('6');

        $user = new User();
        $user->name = 'Leider Osorio';
        $user->email = 'ingenierohseq@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 6;
        $user->save();
        $user->assignRole('JefeArea');
        $user->cargos()->sync('27');

        $user = new User();
        $user->name = 'Sandro Zambrano';
        $user->email = 'almacen@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 7;
        $user->save();
        $user->assignRole('JefeArea');
        $user->cargos()->sync('24');

        $user = new User();
        $user->name = 'Edwin Montoya';
        $user->email = 'mantenimiento@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 4;
        $user->save();
        $user->assignRole('JefeArea');
        $user->cargos()->sync('25');

        $user = new User();
        $user->name = 'karla Quintero';
        $user->email = 'juridica@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 9;
        $user->save();
        $user->assignRole('User');
        $user->cargos()->sync('32');

    }
}
