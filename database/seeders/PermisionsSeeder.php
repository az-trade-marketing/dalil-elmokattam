<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermisionsSeeder extends Seeder
{

    public function run()
    {
        $categories = [
            'admins' => ['en' => 'admin', 'ar' => 'المسؤلين'],
            'tags' => ['en' => 'tags', 'ar' => 'العلامات'],
            'users' => ['en' => 'users', 'ar' => 'المستخدمين'],
            'categories' => ['en' => 'categories', 'ar' => 'الفئات'],
            'areas' => ['en' => 'areas', 'ar' => 'المناطق'],
            'features' => ['en' => 'features', 'ar' => 'الميزات'],
            'settings' => ['en' => 'Settings', 'ar' => 'الإعدادات'],
            'roles' => ['en' => 'roles', 'ar' => 'القواعد'],
            'subscription' => ['en' => 'subscription', 'ar' => 'اشتراك'],
            'zones' => ['en' => 'Zone', 'ar' => 'المناطق'],
            'stores' => ['en' => 'stores', 'ar' => 'المتاجر'],


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
                    'name' => $permissionNameEn,
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
