<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ChuyenNganhService;
use Illuminate\Http\Request;

class ChuyenNganhController extends Controller
{
    protected $chuyenNganhService;

    public function __construct(ChuyenNganhService $chuyenNganhService)
    {
        $this->chuyenNganhService = $chuyenNganhService;
    }

    public function index()
    {
        $majors = $this->chuyenNganhService->getAllMajors();

        return view('majors.index', compact('majors'));
    }

    public function create()
    {
        return view('majors.create');
    }

    public function store(Request $request)
    {
        $this->chuyenNganhService->createMajor($request->all());

        return redirect()->route('majors.index')->with('success', 'Thêm chuyên ngành thành công.');
    }

    public function edit($id)
    {
        $major = $this->chuyenNganhService->getMajorById($id);

        return view('majors.edit', compact('major'));
    }

    public function update(Request $request, $id)
    {
        $this->chuyenNganhService->updateMajor($id, $request->all());

        return redirect()->route('majors.index')->with('success', 'Cập nhật thông tin chuyên ngành thành công.');
    }

    public function destroy($id)
    {
        $this->chuyenNganhService->deleteMajor($id);

        return redirect()->route('majors.index')->with('success', 'Xóa chuyên ngành thành công.');
    }
}
