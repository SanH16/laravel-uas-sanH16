<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

use App\Http\Controllers\ProdiController;

Route::get('/prodi/create', [ProdiController::class, 'create'])->name("prodi.create");
Route::post('/prodi/store', [ProdiController::class, 'store'])->name("prodi.store");    

Route::get('/prodi', [ProdiController::class,'index'])->name('prodi.index');
Route::get('/prodi/{prodi}', [ProdiController::class,'show'])->name('prodi.show');

Route::get('/prodi/{prodi}/edit', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::patch('/prodi/{prodi}', [ProdiController::class,'update'])->name('prodi.update');

Route::delete('/prodi/{prodi}', [ProdiController::class, 'destroy'])->name('prodi.destroy');
