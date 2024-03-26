<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

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

Route::get('foo/user/create', [UserController::class, 'create'])->name('user.create');

Route::post('foo/user/create', [UserController::class, 'store'])->name('user.store');

Route::get('foo/post/create', [PostController::class, 'create'])->name('post.create');

Route::post('foo/post/create', [PostController::class, 'store'])->name('post.store');

Route::get('foo/user/paginate', [UserController::class, 'paginate'])->name('user.paginate');