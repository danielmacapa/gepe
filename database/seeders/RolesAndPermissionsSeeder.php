<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'admin']);
        Permission::create(['name' => 'manager']);
        // Permission::create(['name' => 'writter']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'admin'])->givePermissionTo('admin');
        $role = Role::create(['name' => 'manager'])->givePermissionTo('manager');
        // $role = Role::create(['name' => 'writter'])->givePermissionTo('writter');

    }
}
