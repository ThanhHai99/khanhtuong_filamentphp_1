<?php

namespace App\Services;

use App\Models\ChuyenNganh;

class ChuyenNganhService
{
    public function getAllMajors()
    {
        return ChuyenNganh::all();
    }

    public function getMajorById($id)
    {
        return ChuyenNganh::findOrFail($id);
    }

    public function createMajor($data)
    {
        return ChuyenNganh::create($data);
    }

    public function updateMajor($id, $data)
    {
        $major = ChuyenNganh::findOrFail($id);
        $major->update($data);

        return $major;
    }

    public function deleteMajor($id)
    {
        $major = ChuyenNganh::findOrFail($id);
        $major->delete();
    }
}
