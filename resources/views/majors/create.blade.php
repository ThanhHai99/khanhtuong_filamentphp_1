<!-- resources/views/majors/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Thêm Chuyên ngành</h2>

    <form action="{{ route('majors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ten_chuyen_nganh" class="form-label">Tên chuyên ngành</label>
            <input type="text" class="form-control" id="ten_chuyen_nganh" name="ten_chuyen_nganh" required>
        </div>
        <!-- Thêm các trường khác tùy ý -->
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
