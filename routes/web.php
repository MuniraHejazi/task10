<?php
use App\Http\Controllers\PostController;
use App\Models\post;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[PostController::class,'index']);
Route::get('posts/create',[PostController::class,'create'])->name('posts.create');
Route::get('posts',[PostController::class,'index'])->name('posts.index');
Route::post('posts',[PostController::class,'store'])->name('posts.store');
Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');
Route::put('posts/{post}',[PostController::class,'update'])->name('posts.update');
Route::delete('posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');
Route::resource('posts', PostController::class);
