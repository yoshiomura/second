<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\ProfileController;

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
Route::get('/trainings/create', [TrainingController::class, 'create']);//投稿画面
//Route::get('/trainings/make', [TrainingController::class, 'make']);
Route::get('/trainings/{training}', [TrainingController::class, 'show']);//投稿画面詳細
Route::post('/trainings', [TrainingController::class, 'store']);//投稿保存
Route::put('/trainings/{training}', [TrainingController::class, 'update']);//投稿更新
Route::delete('/trainings/{training}', [TrainingController::class,'delete']);//投稿削除
Route::get('/names/{name}', [NameController::class,'index']);
//Route::get('/profiles/{profile}', [ProfileController::class, 'index']);








