<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class, 'indexAction'])->name('home.index');
//Route::get('/admin', [AdminController::class, 'indexAction'])->name('admin.index');

Route::resource('snippet', 'SnippetController', [
    'only' => ['index', 'store', 'update', 'destroy']
]);

Route::resource('link', 'LinkController', [
    'only' => ['index', 'store', 'update', 'destroy']
]);

Route::resource('file', 'FileController', [
    'only' => ['index', 'store', 'update', 'destroy']
]);

Route::get('{any}', function () {
    return view('admin.index');
})->where('any', '.*');
