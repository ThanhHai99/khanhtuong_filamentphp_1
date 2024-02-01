<!-- resources/views/studentmajors/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Thêm Chuyên ngành sinh viên</h2>

    <form action="{{ route('studentmajors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="sinh_vien_id" class="form-label">ID Sinh viên</label>
            <input type="text" class="form-control" id="sinh_vien_id" name="sinh_vien_id" required>
        </div>
        <div class="mb-3">
            <label for="chuyen_nganh_id" class="form-label">ID Chuyên ngành</label>
            <input type="text" class="form-control" id="chuyen_nganh_id" name="chuyen_nganh_id" required>
        </div>
        <!-- Thêm các trường khác tùy ý -->
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
