<?php

use App\Http\Controllers\BoysController;
use App\Http\Controllers\MaqolController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/Xodimlar', [PageController::class, 'teachers'])->name('teachers');
Route::get('/Talaba yigitlar', [PageController::class, 'men'])->name('men');
Route::get('/Talaba qizlar', [PageController::class, 'weman'])->name('weman');
Route::get('/Maktab haqida', [PageController::class, 'about'])->name('about');
Route::get('/Talaba qo\'shish', [PageController::class, 'contact'])->name('contact');
Route::get('/Talaba haqida', [PageController::class, 'student'])->name('student');



//Admin panel
Route::get('/admin', [BoysController::class, 'admin'])->name('admin');

Route::resource('admin/BoshMaqol', MaqolController::class);
Route::resource('admin/yigitlar', BoysController::class);
Route::resource('admin/oqituvchi', OqituvchiController::class);
// Route::resource('admin/oquvchilar', OquvchiController::class);
// Route::resource('admin/biz haqimizda', BizHaqimizdaController::class);
// Route::resource('admin/maktab formasi', FormaController::class);
// Route::resource('admin/xonalar', XonalarController::class);