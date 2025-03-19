<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\DepartmentController;

Route::get('/', function () {
    return view('home');
});

Route::resource('colleges', CollegeController::class);
Route::resource('departments', DepartmentController::class);
