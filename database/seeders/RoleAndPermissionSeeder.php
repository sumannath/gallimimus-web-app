<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleSAd = Role::create(['name' => 'super-admin']);
        $roleAdm = Role::create(['name' => 'admin']);
        $roleUsr = Role::create(['name' => 'user']);
        $roleGst = Role::create(['name' => 'guest']);

        $permissionCGal = Permission::create(['name' => 'create-gals']);
        $permissionSGal = Permission::create(['name' => 'save-gals']);
        $permissionCUsr = Permission::create(['name' => 'create-users']);
        $permissionCAdm = Permission::create(['name' => 'create-admins']);

        $roleGst->givePermissionTo($permissionCGal);
        $roleUsr->syncPermissions([$permissionCGal, $permissionSGal]);
        $roleAdm->syncPermissions([$permissionCGal, $permissionSGal, $permissionCUsr]);
        $roleSAd->syncPermissions([$permissionCGal, $permissionSGal, $permissionCUsr, $permissionCAdm]);
    }
}
