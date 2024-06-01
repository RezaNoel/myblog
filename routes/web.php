<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\CheckAdminLogin;

//Route::get('/', function () {
//    return view('posts.index');
//});

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

Route::group(['middleware' => ['checkadmin']], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/post/create', [AdminController::class, 'create'])->name('admin.post.create');
    Route::post('/admin/post', [AdminController::class, 'store'])->name('admin.post.store');
    Route::get('/admin/post/{id}/edit', [AdminController::class, 'edit'])->name('admin.post.edit');
    Route::put('/admin/post/{id}', [AdminController::class, 'update'])->name('admin.post.update');
    Route::delete('/admin/post/{id}', [AdminController::class, 'destroy'])->name('admin.post.destroy');
});

//Route::get('home', [AuthController::class, 'homw']);
/////////////////////////////////////
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
