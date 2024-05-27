<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;

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

Route::get('/', [KelasController::class, 'index']);
Route::get('kelas/add', [KelasController::class, 'create']);
Route::post('kelas/add', [KelasController::class, 'store']);

Route::get('kelas/{id}/edit', [KelasController::class, 'edit']);
Route::patch('kelas/{id}/edit', [KelasController::class, 'update']);
Route::delete('kelas/{id}/delete', [KelasController::class, 'destroy']);

Route::get('siswa', [SiswaController::class, 'index']);
Route::get('siswa/add', [SiswaController::class, 'create']);