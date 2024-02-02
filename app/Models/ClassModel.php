<?php

namespace App\Models;

use Models\EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassModel extends EloquentModel
{
    protected $table = 'classes';

    protected $fillable = [
        'class_name',
        'course_id',
        'semester',
        'year',
        'room',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(KhoaHoc::class, 'course_id');
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(SinhVien::class, 'enrollments');
    }
}
