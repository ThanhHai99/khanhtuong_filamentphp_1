<!-- resources/views/majors/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Danh sách Chuyên ngành</h2>

    <a href="{{ route('majors.create') }}" class="btn btn-success mb-3">Thêm Chuyên ngành</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên chuyên ngành</th>
                <!-- Thêm các cột khác tùy ý -->
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($majors as $major)
                <tr>
                    <td>{{ $major->id }}</td>
                    <td>{{ $major->ten_chuyen_nganh }}</td>
                    <!-- Hiển thị các thông tin khác tùy ý -->
                    <td>
                        <a href="{{ route('majors.edit', $major->id) }}" class="btn btn-primary">Sửa</a>
                        <form action="{{ route('majors.destroy', $major->id) }}" method="POST" style="display: inline;">
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
