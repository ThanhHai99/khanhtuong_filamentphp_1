<?php

namespace App\Services;

use App\Models\KhoaHoc;

class KhoaHocService
{
    public function getAllKhoaHocs()
    {
        return KhoaHoc::all();
    }

    public function getKhoaHocById($id)
    {
        return KhoaHoc::findOrFail($id);
    }

    public function createKhoaHoc($data)
    {
        return KhoaHoc::create($data);
    }

    public function updateKhoaHoc($id, $data)
    {
        $khoaHoc = KhoaHoc::findOrFail($id);
        $khoaHoc->update($data);

        return $khoaHoc;
    }

    public function deleteKhoaHoc($id)
    {
        $khoaHoc = KhoaHoc::findOrFail($id);
        $khoaHoc->delete();
    }
}
