<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ReviewController;


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

Route::get('/', [TrainingController::class, 'index']); //トップ画面
Route::get('/trainings/create', [TrainingController::class, 'create']);
Route::get('/trainings/{training}', [TrainingController::class ,'show']);
Route::post('/trainings', [TrainingController::class, 'store']);
Route::get('/trainings/{training}/edit', [TrainingController::class, 'edit']);
Route::put('/trainings/{training}', [TrainingController::class, 'update']);
Route::delete('/trainings/{training}', [TrainingController::class,'delete']);








