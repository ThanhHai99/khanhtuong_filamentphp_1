<!-- resources/views/classes/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Thêm Lớp học</h2>

    <form action="{{ route('classes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ten_lop_hoc" class="form-label">Tên lớp học</label>
            <input type="text" class="form-control" id="ten_lop_hoc" name="ten_lop_hoc" required>
        </div>
        <!-- Thêm các trường khác tùy ý -->
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
