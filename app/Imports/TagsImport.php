<?php

namespace App\Imports;

use App\Models\Tag;
use Maatwebsite\Excel\Concerns\ToModel;

class TagsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row[0] !== 'name_en' && $row[1] !== 'name_ar') {
            return new Tag([
                'name_ar' => $row[1],
                'name_en' => $row[0],
            ]);
        }

        return null; // تجاوز الصفوف التي تحتوي على العناوين
    }
}
