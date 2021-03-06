<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('berandax ga ngaruh');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blogx ga ngaruh');
Route::get('/blog/konten/{id}', [App\Http\Controllers\HomeController::class, 'konten'])->name('kontenx ga ngaruh');
Route::middleware('auth:admin')->group(function(){
  // Tulis routemu di sini.
  Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
});
Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');
// Route::get('/admin_konten/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');


// Route::get('/', function () {
//     return view('beranda');
// });
// Route::get('/','HomeController@index');
// // Route::resource('/', HomeController::class);
// Route::get('/blog', function () {
//     return view('blog');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
