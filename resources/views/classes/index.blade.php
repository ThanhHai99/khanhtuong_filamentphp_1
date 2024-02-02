<!-- resources/views/classes/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Danh sách Lớp học</h2>

    <a href="{{ route('classes.create') }}" class="btn btn-success mb-3">Thêm Lớp học</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên lớp học</th>
                <!-- Thêm các cột khác tùy ý -->
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
                <tr>
                    <td>{{ $class->id }}</td>
                    <td>{{ $class->ten_lop_hoc }}</td>
                    <!-- Hiển thị các thông tin khác tùy ý -->
                    <td>
                        <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display: inline;">
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
