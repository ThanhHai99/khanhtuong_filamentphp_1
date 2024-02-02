<?php

namespace App\Models;

use Models\EloquentModel;

class ChuyenNganh extends EloquentModel
{
    protected $table = 'chuyen_nganhs';

    protected $fillable = [
        'major_name',
        'description',
    ];

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(SinhVien::class, 'student_major');
    }
}
