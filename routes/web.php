<?php

use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;   
use App\Http\Controllers\MataKuliahController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/tampil', function () {
    return view('home');
});

// Route::get('/profil', function () {
//     return view('profile');
// });

Route::get('/profile/{nama}/{npm}/{kelas}',[ProfileController::class,'profile']);
Route::get('/menu',[MenuController::class,'menu']);

Route::get('/user',[UserController::class,'index'])->name('user.index');
Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');

Route::get('/matakuliah',[MataKuliahController::class,'index'])->name('matakuliah.index');
Route::get('/matakuliah/create',[MataKuliahController::class,'create'])->name('matakuliah.create');
Route::post('/matakuliah',[MataKuliahController::class,'store'])->name('matakuliah.store');
Route::get('/matakuliah/{id}/edit',[MataKuliahController::class, 'edit']) -> name('matakuliah.edit');
Route::put('/matakuliah/{id}',[MataKuliahController::class,'update']) -> name('matakuliah.update');
Route::delete('/matakuliah/{id}',[MataKuliahController::class,'destroy']) -> name('matakuliah.destroy');


