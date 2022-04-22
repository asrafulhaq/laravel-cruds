<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



// Student CRUD Controllers 
Route::get('student', [StudentController::class, 'index']) -> name('student.index');
Route::get('student/{id}', [StudentController::class, 'show']) -> name('student.show');
Route::get('student-create', [StudentController::class, 'create']) -> name('student.create');
Route::get('student-edit/{id}', [StudentController::class, 'edit']) -> name('student.edit');
Route::post('student-store', [StudentController::class, 'store']) -> name('student.store');




