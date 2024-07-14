<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678')
            ]);

        $role = Role::first();
        $user->assignRole([$role->id]);
    }


}
