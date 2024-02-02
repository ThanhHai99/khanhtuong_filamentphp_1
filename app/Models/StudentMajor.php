<?php

namespace App\Models;

use Models\EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentMajor extends EloquentModel
{
    protected $table = 'student_major';

    protected $fillable = [
        'student_id',
        'major_id',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(SinhVien::class, 'student_id');
    }

    public function major(): BelongsTo
    {
        return $this->belongsTo(ChuyenNganh::class, 'major_id');
    }
}
