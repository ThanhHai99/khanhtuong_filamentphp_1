<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\StudentMajorService;
use Illuminate\Http\Request;

class StudentMajorController extends Controller
{
    protected $studentMajorService;

    public function __construct(StudentMajorService $studentMajorService)
    {
        $this->studentMajorService = $studentMajorService;
    }

    public function index()
    {
        $studentMajors = $this->studentMajorService->getAllStudentMajors();

        return view('studentmajors.index', compact('studentMajors'));
    }

    public function create()
    {
        return view('studentmajors.create');
    }

    public function store(Request $request)
    {
        $this->studentMajorService->createStudentMajor($request->all());

        return redirect()->route('studentmajors.index')->with('success', 'Thêm chuyên ngành sinh viên thành công.');
    }

    public function edit($id)
    {
        $studentMajor = $this->studentMajorService->getStudentMajorById($id);

        return view('studentmajors.edit', compact('studentMajor'));
    }

    public function update(Request $request, $id)
    {
        $this->studentMajorService->updateStudentMajor($id, $request->all());

        return redirect()->route('studentmajors.index')->with('success', 'Cập nhật thông tin chuyên ngành sinh viên thành công.');
    }

    public function destroy($id)
    {
        $this->studentMajorService->deleteStudentMajor($id);

        return redirect()->route('studentmajors.index')->with('success', 'Xóa chuyên ngành sinh viên thành công.');
    }
}
