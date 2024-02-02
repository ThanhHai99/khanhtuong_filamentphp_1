<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\SinhVienService;
use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    protected $sinhVienService;

    public function __construct(SinhVienService $sinhVienService)
    {
        $this->sinhVienService = $sinhVienService;
    }

    public function index()
    {
        $sinhViens = $this->sinhVienService->getAllSinhViens();

        print_r($sinhViens);

        return $sinhViens;

        // return view('sinhviens.index', compact('sinhViens'));
    }

    public function create()
    {
        return view('sinhviens.create');
    }

    public function store(Request $request)
    {
        $this->sinhVienService->createSinhVien($request->all());

        return redirect()->route('sinhviens.index')->with('success', 'Thêm sinh viên thành công.');
    }

    public function edit($id)
    {
        $sinhVien = $this->sinhVienService->getSinhVienById($id);

        return view('sinhviens.edit', compact('sinhVien'));
    }

    public function update(Request $request, $id)
    {
        $this->sinhVienService->updateSinhVien($id, $request->all());

        return redirect()->route('sinhviens.index')->with('success', 'Cập nhật thông tin sinh viên thành công.');
    }

    public function destroy($id)
    {
        $this->sinhVienService->deleteSinhVien($id);

        return redirect()->route('sinhviens.index')->with('success', 'Xóa sinh viên thành công.');
    }
}
