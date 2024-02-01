<!-- resources/views/khoahocs/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Danh sách Khóa học</h2>

    <a href="{{ route('khoahocs.create') }}" class="btn btn-success mb-3">Thêm Khóa học</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên khóa học</th>
                <!-- Thêm các cột khác tùy ý -->
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($khoaHocs as $khoaHoc)
                <tr>
                    <td>{{ $khoaHoc->id }}</td>
                    <td>{{ $khoaHoc->ten_khoa_hoc }}</td>
                    <!-- Hiển thị các thông tin khác tùy ý -->
                    <td>
                        <a href="{{ route('khoahocs.edit', $khoaHoc->id) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('khoahocs.destroy', $khoaHoc->id) }}" method="POST" style="display: inline;">
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
