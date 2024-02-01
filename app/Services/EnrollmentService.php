<?php

namespace App\Services;

use App\Models\Enrollment;

class EnrollmentService
{
    public function getAllEnrollments()
    {
        return Enrollment::all();
    }

    public function getEnrollmentById($id)
    {
        return Enrollment::findOrFail($id);
    }

    public function createEnrollment($data)
    {
        return Enrollment::create($data);
    }

    public function updateEnrollment($id, $data)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->update($data);

        return $enrollment;
    }

    public function deleteEnrollment($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->delete();
    }
}
