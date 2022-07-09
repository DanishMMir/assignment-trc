<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SnippetController;
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

Route::get('/',[HomeController::class, 'indexAction'])->name('home.index');
Route::get('/admin', [AdminController::class, 'indexAction'])->name('admin.index');

Route::resource('snippet', SnippetController::class, [
    'only' => ['index', 'store', 'update', 'destroy']
]);

Route::resource('link', LinkController::class, [
    'only' => ['index', 'store', 'update', 'destroy']
]);

Route::resource('file', FileController::class, [
    'only' => ['index', 'store', 'update', 'destroy']
]);
