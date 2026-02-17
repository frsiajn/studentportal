<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;  // Add this at the top

Route::get('/', function () {
    return view('home');
});

// This one line creates all 7 CRUD routes!
Route::resource('students', StudentController::class);