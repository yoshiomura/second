<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Htpp\Controllers\TrainingController;
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

Route::get('/post', [PostController::class, 'index']); //トップ画面
Route::get('training/create', [TrainingController::class, 'create']); //トレーニング投稿画面
Route::post('/taining', [TrainingController::class, 'store']); //トレーニング投稿保存
Route::get('/post', [PostController::class, 'show']); //マイページ画面
Route::get('training', [TrainingController::class, '']); //投手上半身トレーニング画面
Route::get('training', [TrainingController::class, '']); //投手下半身トレーニング画面
Route::get('training', [TrainingController::class, '']); //野手上半身トレーニング画面
Route::get('training', [TrainingController::class, '']); //野手下半身トレーニング画面
Route::get('', []);

Route::get('/', function () {
    return view('welcome');
});
