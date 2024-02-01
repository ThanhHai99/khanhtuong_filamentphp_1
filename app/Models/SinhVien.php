<?php

namespace App\Models;

use Models\EloquentModel;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SinhVien extends EloquentModel
{
    protected $table = 'sinh_viens';

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'gender',
        'address',
        'email',
        'phone',
    ];

    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(ClassModel::class, 'enrollments');
    }

    public function majors(): BelongsToMany
    {
        return $this->belongsToMany(Major::class, 'student_major');
    }
}