<?php

namespace App\Services;

use App\Models\StudentMajor;

class StudentMajorService
{
    public function getAllStudentMajors()
    {
        return StudentMajor::all();
    }

    public function getStudentMajorById($id)
    {
        return StudentMajor::findOrFail($id);
    }

    public function createStudentMajor($data)
    {
        return StudentMajor::create($data);
    }

    public function updateStudentMajor($id, $data)
    {
        $studentMajor = StudentMajor::findOrFail($id);
        $studentMajor->update($data);

        return $studentMajor;
    }

    public function deleteStudentMajor($id)
    {
        $studentMajor = StudentMajor::findOrFail($id);
        $studentMajor->delete();
    }
}
