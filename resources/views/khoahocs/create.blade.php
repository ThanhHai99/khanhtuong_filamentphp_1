<!-- resources/views/khoahocs/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Thêm Khóa học</h2>

    <form action="{{ route('khoahocs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ten_khoa_hoc" class="form-label">Tên khóa học</label>
            <input type="text" class="form-control" id="ten_khoa_hoc" name="ten_khoa_hoc" required>
        </div>
        <!-- Thêm các trường khác tùy ý -->
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
