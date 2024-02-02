<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\KhoaHocService;
use Illuminate\Http\Request;

class KhoaHocController extends Controller
{
    protected $khoaHocService;

    public function __construct(KhoaHocService $khoaHocService)
    {
        $this->khoaHocService = $khoaHocService;
    }

    public function index()
    {
        $khoaHocs = $this->khoaHocService->getAllKhoaHocs();

        return view('khoahocs.index', compact('khoaHocs'));
    }

    public function create()
    {
        return view('khoahocs.create');
    }

    public function store(Request $request)
    {
        $this->khoaHocService->createKhoaHoc($request->all());

        return redirect()->route('khoahocs.index')->with('success', 'Thêm khóa học thành công.');
    }

    public function edit($id)
    {
        $khoaHoc = $this->khoaHocService->getKhoaHocById($id);

        return view('khoahocs.edit', compact('khoaHoc'));
    }

    public function update(Request $request, $id)
    {
        $this->khoaHocService->updateKhoaHoc($id, $request->all());

        return redirect()->route('khoahocs.index')->with('success', 'Cập nhật thông tin khóa học thành công.');
    }

    public function destroy($id)
    {
        $this->khoaHocService->deleteKhoaHoc($id);

        return redirect()->route('khoahocs.index')->with('success', 'Xóa khóa học thành công.');
    }
}
