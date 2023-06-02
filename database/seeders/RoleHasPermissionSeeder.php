<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleHasPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin_permission = Permission::all()->only([1]);
        Role::findOrFail(1)->permissions()->sync($superadmin_permission->pluck('id'));

        $admin_permission = Permission::all()->only([2]);
        Role::findOrFail(2)->permissions()->sync($admin_permission->pluck('id'));
    }
}
