<?php

use Illuminate\Support\Facades\Route;
use App\Services\SinhVienService;
use App\Services\KhoaHocService;
use App\Services\ClassModelService;
use App\Services\ChuyenNganhService;
use App\Services\EnrollmentService;
use App\Services\StudentMajorService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// SinhVien Routes
Route::get('/sinhviens', 'SinhVienController@index');
Route::get('/sinhviens/create', 'SinhVienController@create');
Route::post('/sinhviens/store', 'SinhVienController@store');
Route::get('/sinhviens/edit/{id}', 'SinhVienController@edit');
Route::post('/sinhviens/update/{id}', 'SinhVienController@update');
Route::post('/sinhviens/delete/{id}', 'SinhVienController@destroy');

// KhoaHoc Routes
Route::get('/khoahocs', 'KhoaHocController@index');
Route::get('/khoahocs/create', 'KhoaHocController@create');
Route::post('/khoahocs/store', 'KhoaHocController@store');
Route::get('/khoahocs/edit/{id}', 'KhoaHocController@edit');
Route::post('/khoahocs/update/{id}', 'KhoaHocController@update');
Route::post('/khoahocs/delete/{id}', 'KhoaHocController@destroy');

// ClassModel Routes
Route::get('/classes', 'ClassModelController@index');
Route::get('/classes/create', 'ClassModelController@create');
Route::post('/classes/store', 'ClassModelController@store');
Route::get('/classes/edit/{id}', 'ClassModelController@edit');
Route::post('/classes/update/{id}', 'ClassModelController@update');
Route::post('/classes/delete/{id}', 'ClassModelController@destroy');

// ChuyenNganh Routes
Route::get('/majors', 'ChuyenNganhController@index');
Route::get('/majors/create', 'ChuyenNganhController@create');
Route::post('/majors/store', 'ChuyenNganhController@store');
Route::get('/majors/edit/{id}', 'ChuyenNganhController@edit');
Route::post('/majors/update/{id}', 'ChuyenNganhController@update');
Route::post('/majors/delete/{id}', 'ChuyenNganhController@destroy');

// Enrollment Routes
Route::get('/enrollments', 'EnrollmentController@index');
Route::get('/enrollments/create', 'EnrollmentController@create');
Route::post('/enrollments/store', 'EnrollmentController@store');
Route::get('/enrollments/edit/{id}', 'EnrollmentController@edit');
Route::post('/enrollments/update/{id}', 'EnrollmentController@update');
Route::post('/enrollments/delete/{id}', 'EnrollmentController@destroy');

// StudentMajor Routes
Route::get('/studentmajors', 'StudentMajorController@index');
Route::get('/studentmajors/create', 'StudentMajorController@create');
Route::post('/studentmajors/store', 'StudentMajorController@store');
Route::get('/studentmajors/edit/{id}', 'StudentMajorController@edit');
Route::post('/studentmajors/update/{id}', 'StudentMajorController@update');
Route::post('/studentmajors/delete/{id}', 'StudentMajorController@destroy');
