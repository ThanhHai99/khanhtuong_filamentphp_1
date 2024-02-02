<!-- resources/views/sinhviens/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Danh sách Sinh viên</h2>

    <a href="{{ route('sinhviens.create') }}" class="btn btn-success mb-3">Thêm Sinh viên</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ và tên</th>
                <!-- Thêm các cột khác tùy ý -->
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sinhViens as $sinhVien)
                <tr>
                    <td>{{ $sinhVien->id }}</td>
                    <td>{{ $sinhVien->ho_ten }}</td>
                    <!-- Hiển thị các thông tin khác tùy ý -->
                    <td>
                        <a href="{{ route('sinhviens.edit', $sinhVien->id) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('sinhviens.destroy', $sinhVien->id) }}" method="POST" style="display: inline;">
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
