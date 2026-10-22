<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create roles
        $adminRole =Role::create(['name' =>'admin']);
        $userRole =Role::create(['name' =>'user']);

      // create permission
        $manageUsersPermission = Permission::create(['name'=>'manage users']);
        $viewDashboardPermission = Permission::create(['name'=>'view dashboard']);

        //assign roles
        $adminRole->givePermissionTo($manageUsersPermission);
        $adminRole->givePermissionTo($viewDashboardPermission);
        $userRole->givePermissionTo($viewDashboardPermission);
    }
}
