<?php

use App\Http\Controllers\BizHaqimizdaController;
use App\Http\Controllers\BoysController;
use App\Http\Controllers\FormaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MaqolController;
use App\Http\Controllers\OqituvchilarController;
use App\Http\Controllers\OquvchilarController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QizlarController;
use App\Http\Controllers\XonaController;
use App\Http\Controllers\YigitlarController;
use App\Models\yigitlar;
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
Route::get('/Talaba yigitlar', [PageController::class, 'men'])->name('men');
Route::get('/Talaba qizlar', [PageController::class, 'weman'])->name('weman');
Route::get('/Maktab haqida', [PageController::class, 'about'])->name('about');
Route::get('/Xodimlar', [PageController::class, 'teachers'])->name('teachers');
Route::get('/Talabalar', [PageController::class, 'students_all'])->name('students_all');
Route::get('/Talaba haqida', [PageController::class, 'student'])->name('student');
Route::get('/Talaba qo\'shish', [PageController::class, 'contact'])->name('contact');



//Admin panel
Route::get('/admin', [MainController::class, 'admin']);
// Route::get('Forma/edit/{id}', [FormaController::class, 'edit']);
Route::resource('admin/Forma', FormaController::class);
Route::resource('admin/Xonalar', XonaController::class);
Route::resource('admin/qizlar', QizlarController::class);
Route::resource('admin/BoshMaqol', MaqolController::class);
Route::resource('admin/yigitlar', YigitlarController::class);
Route::resource('admin/oquvchilar', OquvchilarController::class);
Route::resource('admin/oqituvchi', OqituvchilarController::class);
Route::resource('admin/biz_haqimizda', BizHaqimizdaController::class);