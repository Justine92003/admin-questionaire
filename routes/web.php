<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/main', [QuestionController::class, 'index'])->name('main');
Route::post('/add-question', [QuestionController::class, 'addQuestion'])->name('add-question');