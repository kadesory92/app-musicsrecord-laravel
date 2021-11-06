<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\AlbumController;
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

Route::get('/', [AlbumController::class, 'index'])->name('albums.index');

Route::get('artists', [ArtistController::class, 'index'])->name('artists.index');


//Route::resource('artists', ArtistController::class);
//Route::resource('albums', AlbumController::class);


Route::middleware(['auth'])->group(function () {

    //Route::resource('albums', AlbumController::class)->except('index');

    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');
    
});

require __DIR__.'/auth.php';
