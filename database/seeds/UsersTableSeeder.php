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

        Role::create(['name' => 'user']);
        Role::create(['name' => 'admin']);

        $admin = new User();
        $admin->name = 'Luis';
        $admin->email = 'Sistemas@prosarc.com.co';
        $admin->email_verified_at = now();
        $admin->password = bcrypt('secret');
        $admin->Avatar = 'robot400x400.gif';
        $admin->ColorUser = 1;
        $admin->save();
        $admin->assignRole('admin');

        $admin = new User();
        $admin->name = 'Heydi';
        $admin->email = 'Sistemas2@prosarc.com.co';
        $admin->email_verified_at = now();
        $admin->password = bcrypt('secret');
        $admin->Avatar = 'robot400x400.gif';
        $admin->ColorUser = 1;
        $admin->save();
        $admin->assignRole('admin');

        $admin = new User();
        $admin->name = 'usertest';
        $admin->email = 'admin@white.com';
        $admin->email_verified_at = now();
        $admin->password = bcrypt('secret');
        $admin->Avatar = 'robot400x400.gif';
        $admin->ColorUser = 1;
        $admin->save();
        $admin->assignRole('user');
    }
}
