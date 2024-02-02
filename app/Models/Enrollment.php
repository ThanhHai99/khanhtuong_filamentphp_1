<?php

namespace App\Models;

use Models\EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Enrollment extends EloquentModel
{
    protected $table = 'enrollments';

    protected $fillable = [
        'student_id',
        'class_id',
        'enrollment_date',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(SinhVien::class, 'student_id');
    }

    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
