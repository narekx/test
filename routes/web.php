<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PagesController;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', 'admin']
], function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
//    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');

    /**
     * Pages Routes
     */
    Route::get('pages', [PagesController::class, 'index'])->name('pages.index');
    Route::get('pages/create', [PagesController::class, 'create'])->name('pages.create');
    Route::post('pages/store', [PagesController::class, 'store'])->name('pages.store');
    Route::get('pages/edit/{id}', [PagesController::class, 'edit'])->name('pages.edit');
    Route::post('pages/update/{id}', [PagesController::class, 'update'])->name('pages.update');
    Route::post('pages/delete/{id}', [PagesController::class, 'delete'])->name('pages.delete');
    Route::get('pages/show/{id}', [PagesController::class, 'show'])->name('pages.show');
});

Route::get('{slug}', [\App\Http\Controllers\PagesController::class, 'show'])->name('pages.show');

