<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\KerusakanController;
use App\Http\Controllers\Admin\RulesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DiagnoseController;
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

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'processlogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/diagnosa', [DiagnoseController::class,'index']);
Route::post('/diagnosa', [DiagnoseController::class,'diagnosa'])->name('diagnosa');
Route::get('/hasil-diagnosa', [DiagnoseController::class,'hasilDiagnosa'])->name('hasilDiagnosa');


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth:web']
], function () {
    Route::get('dashboard',[DashboardController::class,'index']);
    Route::resource('gejala', GejalaController::class);
    Route::resource('kerusakan', KerusakanController::class);
    Route::resource('rules', RulesController::class);
});

