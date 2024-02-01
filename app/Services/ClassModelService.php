<?php

namespace App\Services;

use App\Models\ClassModel;

class ClassModelService
{
    public function getAllClasses()
    {
        return ClassModel::all();
    }

    public function getClassById($id)
    {
        return ClassModel::findOrFail($id);
    }

    public function createClass($data)
    {
        return ClassModel::create($data);
    }

    public function updateClass($id, $data)
    {
        $class = ClassModel::findOrFail($id);
        $class->update($data);

        return $class;
    }

    public function deleteClass($id)
    {
        $class = ClassModel::findOrFail($id);
        $class->delete();
    }
}
