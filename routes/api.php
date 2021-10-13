<?php

use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api')->group(function () {
    Route::prefix('product')->name('.product')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('.index');
        Route::get('/{id}', [ProductController::class, 'index'])->name('.index.id')->whereNumber('id');
        Route::get('/kotaasc', [ProductController::class, 'kotaAsc'])->name('.kotaAsc');
        Route::get('/hargatertinggiperkota', [ProductController::class, 'hargaTertinggiPerKota'])->name('.hargaTertinggiPerKota');
        Route::get('/hargaterendah', [ProductController::class, 'hargaTerendah'])->name('.hargaTerendah');
    });

    Route::prefix('karyawan')->name('.karyawan')->group(function () {
        Route::get('/', [KaryawanController::class, 'index'])->name('.index');
        Route::post('/', [KaryawanController::class, 'store'])->name('.index.submit');
    });
});
