<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        Role::create(['name_en' => 'admin', 'name_ar' => 'ادمن', 'guard_name' => 'admin']);
        Role::create(['name_en' => 'manager', 'name_ar' => 'مدير', 'guard_name' => 'admin']);
        Role::create(['name_en' => 'store-officer', 'name_ar' => 'مسئول المتجر ', 'guard_name' => 'admin']);

    }
}
