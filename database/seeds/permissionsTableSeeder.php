<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class permissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['guard_name' => 'web', 'name' => 'readAreas']);
        Permission::create(['guard_name' => 'web', 'name' => 'createAreas']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateAreas']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteAreas']);


        Permission::create(['guard_name' => 'web', 'name' => 'readComites']);
        Permission::create(['guard_name' => 'web', 'name' => 'createComites']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateComites']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteComites']);


        Permission::create(['guard_name' => 'web', 'name' => 'readDocuments']);
        Permission::create(['guard_name' => 'web', 'name' => 'createDocuments']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateDocuments']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteDocuments']);


        Permission::create(['guard_name' => 'web', 'name' => 'readIndicators']);
        Permission::create(['guard_name' => 'web', 'name' => 'createIndicators']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateIndicators']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteIndicators']);


        Permission::create(['guard_name' => 'web', 'name' => 'readReleases']);
        Permission::create(['guard_name' => 'web', 'name' => 'createReleases']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateReleases']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteReleases']);


        Permission::create(['guard_name' => 'web', 'name' => 'readUser']);
        Permission::create(['guard_name' => 'web', 'name' => 'createUser']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateUser']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteUser']);


        Permission::create(['guard_name' => 'web', 'name' => 'readProcess']);
        Permission::create(['guard_name' => 'web', 'name' => 'createProcess']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateProcess']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteProcess']);


        Permission::create(['guard_name' => 'web', 'name' => 'readPermissions']);
        Permission::create(['guard_name' => 'web', 'name' => 'createPermissions']);
        Permission::create(['guard_name' => 'web', 'name' => 'updatePermissions']);
        Permission::create(['guard_name' => 'web', 'name' => 'deletePermissions']);


        Permission::create(['guard_name' => 'web', 'name' => 'readRole']);
        Permission::create(['guard_name' => 'web', 'name' => 'createRole']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateRole']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteRole']);

        Permission::create(['guard_name' => 'web', 'name' => 'readRequisito']);
        Permission::create(['guard_name' => 'web', 'name' => 'createRequisito']);
        Permission::create(['guard_name' => 'web', 'name' => 'updateRequisito']);
        Permission::create(['guard_name' => 'web', 'name' => 'deleteRequisito']);

        Permission::create(['guard_name' => 'web', 'name' => 'indexDocuments']);



        $role = Role::findByName('Gerente');
        $role->syncPermissions(['readAreas',
            'readComites',
            'readDocuments',
            'readIndicators',
            'readReleases',
            'readUser',
            'readProcess',
            'updatePermissions',
            'createAreas', 
            'updateAreas',
            'readAreas',
            'createUser',
            'updateUser',
            'deleteUser',
            'readRole',
            'createRole',
            'updateRole',
            'deleteRole',
            'createComites',
            'updateComites',
            'deleteComites',
            'readRequisito',
            'createRequisito',
            'updateRequisito',
            'deleteRequisito',
            'createComites',
            'updateComites',
            'deleteComites']);


        $role = Role::findByName('Director');
        $role->syncPermissions(['readComites',
            'readDocuments',
            'readIndicators',
            'readReleases',
            'readUser',
            'readProcess']);


        $role = Role::findByName('JefeArea');
        $role->syncPermissions(['readComites',
            'readDocuments',
            'readIndicators',
            'createIndicators',
            'updateIndicators',
            'deleteIndicators',
            'readReleases',
            'readUser',
            'readProcess',
            'updateProcess',
            'createProcess',
            'readRequisito',
            'createRequisito',
            'updateRequisito',
            'deleteRequisito',
            'createComites',
            'updateComites',
            'deleteComites']);


        $role = Role::findByName('User');
        $role->syncPermissions(['readComites',
            'readDocuments',
            'readIndicators',
            'readReleases',
            'readUser',
            'readProcess']);
    }
}
