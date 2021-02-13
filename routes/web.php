<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ActorController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\DirController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GuimailController;
use App\Models\genres;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/phim/{id}', [HomeController::class, 'detail'])->name('detail');
Route::get('/genres/{id}', [HomeController::class, 'genres'])->name('genres');
Route::post('/lienhe', [GuimailController::class, 'guimaillienhe'])->name('lienhe');
Route::get('/baocao', [HomeController::class, 'baocao']);


// admin
Route::get('admin', function () {
    return view('admin.page.index');
})->middleware('auth', 'checkAdmin');


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'checkAdmin']], function () {
    // Quản lý phim
    Route::resource('film', FilmController::class);

    // Quản lý thể loại
    Route::resource('genres', GenresController::class);

    // Quản lý thông tin đạo diễn
    Route::resource('director', DirController::class);

    // Quản lý thông tin diễn viên
    Route::resource('actor', ActorController::class);
});

Auth::routes();

// login & register

Route::group(['middleware' => ['checklogin']], function () {
    // login
    Route::get('login', function () {
        $genres = genres::all();
        return view('auth.login', ['genres' => $genres]);
    })->name('login');

    Route::get('register', function () {
        $genres = genres::all();
        return view('auth.register', ['genres' => $genres]);
    })->name('register');
});
