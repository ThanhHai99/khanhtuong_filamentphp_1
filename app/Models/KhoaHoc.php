<?php

namespace App\Models;

use Models\EloquentModel;

class KhoaHoc extends EloquentModel
{
    protected $table = 'khoa_hocs';

    protected $fillable = [
        'course_name',
        'description',
        'credits',
    ];

    public function classes()
    {
        return $this->hasMany(ClassModel::class, 'course_id');
    }
}
