<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Students list page 
Route::get('/students', function () { 
    $students = [ 
        (object) ['id' => 1, 'name' => 'Muriel Angelo Yaco', 'course' => 'BSIT', 'year_level' => '4th Year'], 
    ]; 
    return view('students.index', compact('students')); 
});

// Add student page 
Route::get('/students/create', function () { 
    return view('students.create'); 
}); 

// Show student profile 
Route::get('/students/{id}', function ($id) { 
    return view('students.show'); 
}); 

// Edit student page
Route::get('/students/{id}/edit', function ($id) { 
    return view('students.edit');
});