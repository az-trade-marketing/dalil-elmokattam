<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role= Role::create(['name'=>'admin','name_en' => 'admin', 'name_ar' => 'ادمن', 'guard_name' => 'admin']);
        $permissions = Permission::get();
       // Sync the permissions with the role
       $role->syncPermissions($permissions);

        $role= Role::create(['name'=>'stores','name_en' => 'store', 'name_ar' => 'متاجر', 'guard_name' => 'admin']);
        $permissions = Permission::where("name","Active Store Update")->get();
       // Sync the permissions with the role
       $role->syncPermissions($permissions);
        
    }
}
