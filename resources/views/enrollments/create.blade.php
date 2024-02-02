<!-- resources/views/enrollments/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Thêm Đăng ký</h2>

    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="sinh_vien_id" class="form-label">ID Sinh viên</label>
            <input type="text" class="form-control" id="sinh_vien_id" name="sinh_vien_id" required>
        </div>
        <div class="mb-3">
            <label for="lop_hoc_id" class="form-label">ID Lớp học</label>
            <input type="text" class="form-control" id="lop_hoc_id" name="lop_hoc_id" required>
        </div>
        <!-- Thêm các trường khác tùy ý -->
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
