<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'welcome']);
Route::post('/addStudent', [StudentController::class, 'addStudent']);

Route::get('/read', [StudentController::class, 'read']);

Route::get('/delete{id}', [StudentController::class, 'delete'])->name('del_route');

Route::get('/edit{id}', [StudentController::class, 'edit'])->name('upd_route');
Route::post('/update{id}', [StudentController::class, 'update'])->name('update_route');

Route::get('/services', [StudentController::class, 'services']);
Route::get('/contact', [StudentController::class, 'contact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
