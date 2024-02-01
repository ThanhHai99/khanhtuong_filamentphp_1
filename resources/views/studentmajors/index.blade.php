<!-- resources/views/studentmajors/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Danh sách Chuyên ngành sinh viên</h2>

    <a href="{{ route('studentmajors.create') }}" class="btn btn-success mb-3">Thêm Chuyên ngành sinh viên</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Sinh viên</th>
                <th>ID Chuyên ngành</th>
                <!-- Thêm các cột khác tùy ý -->
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentMajors as $studentMajor)
                <tr>
                    <td>{{ $studentMajor->id }}</td>
                    <td>{{ $studentMajor->sinh_vien_id }}</td>
                    <td>{{ $studentMajor->chuyen_nganh_id }}</td>
                    <!-- Hiển thị các thông tin khác tùy ý -->
                    <td>
                        <a href="{{ route('studentmajors.edit', $studentMajor->id) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('studentmajors.destroy', $studentMajor->id) }}" method="POST" style="display: inline;">
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
