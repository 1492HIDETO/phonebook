<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PhonebookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PhonebookController::class, 'index'])->name('index');
Route::post('/store', [PhonebookController::class, 'store'])->name('store');
Route::get('/contact', [PhonebookController::class, 'contact'])->name('contact');
Route::get('/edit/{phonebook_id}', [PhonebookController::class, 'edit'])->name('edit');
Route::get('/profile{phonebook_id}', [PhonebookController::class, 'profile'])->name('profile');
Route::patch('/update/{phonebook_id}', [PhonebookController::class, 'update'])->name('update');
Route::delete('/update/{phonebook_id}', [PhonebookController::class, 'destroy'])->name('destroy');
