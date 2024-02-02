<!-- resources/views/enrollments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Danh sách Đăng ký</h2>

    <a href="{{ route('enrollments.create') }}" class="btn btn-success mb-3">Thêm Đăng ký</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Sinh viên</th>
                <th>ID Lớp học</th>
                <!-- Thêm các cột khác tùy ý -->
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enrollments as $enrollment)
                <tr>
                    <td>{{ $enrollment->id }}</td>
                    <td>{{ $enrollment->sinh_vien_id }}</td>
                    <td>{{ $enrollment->lop_hoc_id }}</td>
                    <!-- Hiển thị các thông tin khác tùy ý -->
                    <td>
                        <a href="{{ route('enrollments.edit', $enrollment->id) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('enrollments.destroy', $enrollment->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
