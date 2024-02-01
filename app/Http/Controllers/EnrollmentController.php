<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\EnrollmentService;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    protected $enrollmentService;

    public function __construct(EnrollmentService $enrollmentService)
    {
        $this->enrollmentService = $enrollmentService;
    }

    public function index()
    {
        $enrollments = $this->enrollmentService->getAllEnrollments();

        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        return view('enrollments.create');
    }

    public function store(Request $request)
    {
        $this->enrollmentService->createEnrollment($request->all());

        return redirect()->route('enrollments.index')->with('success', 'Thêm đăng ký thành công.');
    }

    public function edit($id)
    {
        $enrollment = $this->enrollmentService->getEnrollmentById($id);

        return view('enrollments.edit', compact('enrollment'));
    }

    public function update(Request $request, $id)
    {
        $this->enrollmentService->updateEnrollment($id, $request->all());

        return redirect()->route('enrollments.index')->with('success', 'Cập nhật thông tin đăng ký thành công.');
    }

    public function destroy($id)
    {
        $this->enrollmentService->deleteEnrollment($id);

        return redirect()->route('enrollments.index')->with('success', 'Xóa đăng ký thành công.');
    }
}
