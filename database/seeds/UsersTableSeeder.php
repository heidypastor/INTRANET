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
        $admin->name = 'Luis De la hoz Ricaurte';
        $admin->email = 'Sistemas@prosarc.com.co';
        $admin->email_verified_at = now();
        $admin->password = bcrypt('secret');
        $admin->Avatar = 'robot400x400.gif';
        $admin->ColorUser = 1;
        $admin->areas_id = 1;
        $admin->save();
        $admin->assignRole('Super Admin');

        $admin = new User();
        $admin->name = 'Heidy Pastor Muñoz';
        $admin->email = 'Sistemas2@prosarc.com.co';
        $admin->email_verified_at = now();
        $admin->password = bcrypt('secret');
        $admin->Avatar = 'robot400x400.gif';
        $admin->ColorUser = 4;
        $admin->areas_id = 1;
        $admin->save();
        $admin->assignRole('Super Admin');


        $user = new User();
        $user->name = 'Victor Velasco Parrado';
        $user->email = 'dirtecnica@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 3;
        $user->save();
        $user->assignRole('JefeArea');

        $user = new User();
        $user->name = 'Jhon Gonzales Bravo';
        $user->email = 'logistica@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 2;
        $user->save();
        $user->assignRole('JefeArea');

        $user = new User();
        $user->name = 'Duvan Campos Moncada';
        $user->email = 'asistentelogistica@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 2;
        $user->save();
        $user->assignRole('User');

        $user = new User();
        $user->name = 'Alejandro Gamba Cubillos';
        $user->email = 'auxiliarlogistico@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 2;
        $user->save();
        $user->assignRole('User');

        $user = new User();
        $user->name = 'Andres Moreno Bello';
        $user->email = 'ingenierohseq@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 6;
        $user->save();
        $user->assignRole('User');

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

        $user = new User();
        $user->name = 'Camilo Triviño Suarez';
        $user->email = 'ingtratamiento1@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 3;
        $user->save();
        $user->assignRole('User');

        $user = new User();
        $user->name = 'Oscar Vasquez Hernandez';
        $user->email = 'ingtratamiento3@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 3;
        $user->save();
        $user->assignRole('User');

        $user = new User();
        $user->name = 'William Cendales Arevalo';
        $user->email = 'ingtratamiento2@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 3;
        $user->save();
        $user->assignRole('User');

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

        $user = new User();
        $user->name = 'Maria Molano González';
        $user->email = 'CuentasCorporativas@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');

        $user = new User();
        $user->name = 'Lorena Urriago Javela';
        $user->email = 'Comercial2@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');

        $user = new User();
        $user->name = 'Briyith Rodriguez Sanchez';
        $user->email = 'Comercial1@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');

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

        $user = new User();
        $user->name = 'Cesar';
        $user->email = 'Comercial4@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');

        $user = new User();
        $user->name = 'Lady Céspedes Moreno';
        $user->email = 'servicomercial@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 10;
        $user->save();
        $user->assignRole('User');

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

        $user = new User();
        $user->name = 'Leider Osorio Hoyos';
        $user->email = 'jefehseq@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 6;
        $user->save();
        $user->assignRole('JefeArea');

        $user = new User();
        $user->name = 'Sandro';
        $user->email = 'almacen@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 7;
        $user->save();
        $user->assignRole('JefeArea');

        $user = new User();
        $user->name = 'Edwin';
        $user->email = 'mantenimiento@prosarc.com.co';
        $user->email_verified_at = now();
        $user->password = bcrypt('secret');
        $user->Avatar = 'robot400x400.gif';
        $user->ColorUser = 1;
        $user->areas_id = 4;
        $user->save();
        $user->assignRole('JefeArea');

    }
}
