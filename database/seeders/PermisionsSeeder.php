<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisionsSeeder extends Seeder
{

    public function run()
    {
        $categories = [
            'management' => ['en' => 'Management', 'ar' => 'إدارة'],
            'users' => ['en' => 'Users', 'ar' => 'المستخدمين'],
            'areas' => ['en' => 'Areas', 'ar' => 'المناطق'],
            'categories' => ['en' => 'Categories', 'ar' => 'الفئات'],
            'activeStore' => ['en' => 'Active Store', 'ar' => 'المتاجر النشطه'],
            'joinedStore' => ['en' => 'Joined Store', 'ar' => 'المتاجر المنضمه'],
            'settings' => ['en' => 'Settings', 'ar' => 'الإعدادات'],
        ];

        $actions = [
            'create' => ['en' => 'Create', 'ar' => 'إنشاء'],
            'read' => ['en' => 'Read', 'ar' => 'قراءة'],
            'update' => ['en' => 'Update', 'ar' => 'تحديث'],
            'delete' => ['en' => 'Delete', 'ar' => 'حذف'],
            'change_status' => ['en' => 'Change Status', 'ar' => 'تغيير الحالة'],
        ];

        foreach ($categories as $categoryKey => $categoryNames) {
            foreach ($actions as $actionKey => $actionNames) {
                $permissionNameEn = $categoryNames['en'] . ' ' . $actionNames['en'];
                $permissionNameAr =   $actionNames['ar']. ' ' .$categoryNames['ar'];

                Permission::firstOrCreate([
                    'name_en' => $permissionNameEn,
                    'name_ar' => $permissionNameAr,
                    'cat_name_en' => $categoryNames['en'],
                    'cat_name_ar' => $categoryNames['ar'],
                    'guard_name' => 'admin',
                ]);
            }
        }
    }

    }
