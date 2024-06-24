<?php

use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [SubjectController::class, 'home'])->name('subject.home');
Route::get('/{id}/category', [SubjectController::class, 'category'])->name('subject.category');
Route::get('/witer', [SubjectController::class, 'writer'])->name('subject.writer');
Route::get('/about', [SubjectController::class, 'about'])->name('subject.about');
