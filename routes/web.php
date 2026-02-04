<?php

use Illuminate\Support\Facades\Route;

// --- BÀI 2 ---
Route::get('/home', function () {
    return "Chào mừng đến với Laravel";
});

Route::get('/about', function () {
    return "Họ tên: Nguyễn Văn A - Lớp: WD18301 - MSSV: PS12345";
});

Route::get('/contact', function () {
    return view('contact');
});

// --- BÀI 3 ---
Route::get('/tong/{a}/{b}', function ($a, $b) {
    $sum = $a + $b;
    return "Tổng của $a và $b là: $sum";
});

Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "Sinh viên: $name - Tuổi: $age";
});

// --- BÀI 4 ---
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });
    Route::get('/users', function () {
        return "Danh sách người dùng";
    });
});

Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Ngày hợp lệ: $day/$month/$year";
})->where([
    'day'   => '[1-9]|[12][0-9]|3[01]',
    'month' => '[1-9]|1[0-2]',
    'year'  => '[0-9]{4}'
]);