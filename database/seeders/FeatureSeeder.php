<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Feature;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::insert([
            [
                "id" => 1,
                "name_ar" => "صوره",
                "name_en" => "image",
                "type" => "image",
            ],
            [
                "id" => 2,
                "name_ar" => "العديد من الصور",
                "name_en" => "multi image",
                "type" => "multiImage",
            ],
            [
                "id" => 3,
                "name_ar" => "مقطع فيديو",
                "name_en" => "video",
                "type" => "vidio",
            ],
            [
                "id" => 4,
                "name_ar" => "نص",
                "name_en" => "text",
                "type" => "text",
            ]
        ]);
        
    }


}
