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
Route::get('/admin', [AdminController::class, 'indexAction'])->name('admin.index');

Route::resource('users', 'UsersController', [
    'only' => ['index', 'show']
]);

Route::resource('users', 'UsersController', [
    'only' => ['index', 'show']
]);

Route::resource('users', 'UsersController', [
    'only' => ['index', 'show']
]);
//Route::get('/admin', [DashboardController::class, 'indexAction'])->name('dashboard');
//Route::get('/admin/property/list', [DashboardController::class, 'propertyListAction'])->name('property.list');
//Route::post('/admin/property/save', [DashboardController::class, 'updateProperty'])->name('property.save');
//Route::post('/admin/property/save', [DashboardController::class, 'updateProperty'])->name('property.save');
//
//Route::get('/admin', [DashboardController::class, 'indexAction'])->name('dashboard');
//Route::get('/admin/property/list', [DashboardController::class, 'propertyListAction'])->name('property.list');
//Route::post('/admin/property/save', [DashboardController::class, 'updateProperty'])->name('property.save');
//Route::post('/admin/property/save', [DashboardController::class, 'updateProperty'])->name('property.save');
//
//Route::get('/admin', [DashboardController::class, 'indexAction'])->name('dashboard');
//Route::get('/admin/property/list', [DashboardController::class, 'propertyListAction'])->name('property.list');
//Route::post('/admin/property/save', [DashboardController::class, 'updateProperty'])->name('property.save');
//Route::post('/admin/property/save', [DashboardController::class, 'updateProperty'])->name('property.save');
