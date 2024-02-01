<!-- resources/views/sinhviens/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h2>Thêm Sinh viên</h2>

    <form action="{{ route('sinhviens.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="ho_ten" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="ho_ten" name="ho_ten" required>
        </div>
        <!-- Thêm các trường khác tùy ý -->
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
@endsection
