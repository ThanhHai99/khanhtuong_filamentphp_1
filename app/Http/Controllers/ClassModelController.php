<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\ClassModelService;
use Illuminate\Http\Request;

class ClassModelController extends Controller
{
    protected $classModelService;

    public function __construct(ClassModelService $classModelService)
    {
        $this->classModelService = $classModelService;
    }

    public function index()
    {
        $classes = $this->classModelService->getAllClasses();

        return view('classes.index', compact('classes'));
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        $this->classModelService->createClass($request->all());

        return redirect()->route('classes.index')->with('success', 'Thêm lớp học thành công.');
    }

    public function edit($id)
    {
        $class = $this->classModelService->getClassById($id);

        return view('classes.edit', compact('class'));
    }

    public function update(Request $request, $id)
    {
        $this->classModelService->updateClass($id, $request->all());

        return redirect()->route('classes.index')->with('success', 'Cập nhật thông tin lớp học thành công.');
    }

    public function destroy($id)
    {
        $this->classModelService->deleteClass($id);

        return redirect()->route('classes.index')->with('success', 'Xóa lớp học thành công.');
    }
}
