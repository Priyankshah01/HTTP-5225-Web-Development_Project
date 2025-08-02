<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Redirect home to users list
Route::get('/', function () {
    return redirect()->route('users.index');
});

// User CRUD routes
Route::resource('students', StudentController::class);
