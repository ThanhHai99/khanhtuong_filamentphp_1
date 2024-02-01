<?php

namespace App\Services;

use App\Models\SinhVien;

class SinhVienService
{
    public function getAllSinhViens()
    {
        return SinhVien::all();
    }

    public function getSinhVienById($id)
    {
        return SinhVien::findOrFail($id);
    }

    public function createSinhVien($data)
    {
        return SinhVien::create($data);
    }

    public function updateSinhVien($id, $data)
    {
        $sinhVien = SinhVien::findOrFail($id);
        $sinhVien->update($data);

        return $sinhVien;
    }

    public function deleteSinhVien($id)
    {
        $sinhVien = SinhVien::findOrFail($id);
        $sinhVien->delete();
    }
}
