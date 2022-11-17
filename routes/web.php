<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NameController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::controller(TrainingController::class)->middleware(['auth'])->group(function(){
Route::get('/', [TrainingController::class, 'index'])->name('index')->middleware('auth');
Route::get('/trainings/like/{training}', [\App\Http\Controllers\LikeController::class, 'like'])->name('like')->middleware('auth');
Route::get('/trainings/unlike/{training}', [\App\Http\Controllers\LikeController::class, 'unlike'])->name('unlike')->middleware('auth');
Route::get('/trainings/create', [TrainingController::class, 'create'])->name('create');//投稿画面
Route::post('/trainings/{training}', [TrainingController::class, 'keep'])->name('keep');
Route::get('/trainings/{training}', [TrainingController::class, 'show'])->name('show');//投稿画面詳細
Route::post('/trainings', [TrainingController::class, 'store'])->name('store');//トレーニング投稿投稿保存
Route::delete('/trainings/{training}', [TrainingController::class,'delete'])->name('delete');//投稿削除
Route::get('/names/{name}', [NameController::class,'index']);
Route::get('/reviews/{review}', [ReviewController::class,'index']);

Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
