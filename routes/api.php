<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\SnippetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/snippet', [SnippetController::class, 'index'])->name('snippet.index');
Route::post('/snippet', [SnippetController::class, 'store'])->name('snippet.store');
Route::get('/snippet/{id}', [SnippetController::class, 'destroy'])->name('snippet.destroy');
Route::post('/snippet/{id}', [SnippetController::class, 'update'])->name('snippet.update');

Route::get('/link', [LinkController::class, 'index'])->name('link.index');
Route::post('/link', [LinkController::class, 'store'])->name('link.store');
Route::get('/link/{id}', [LinkController::class, 'destroy'])->name('link.destroy');
Route::post('/link/{id}', [LinkController::class, 'update'])->name('link.update');

Route::get('/file', [FileController::class, 'index'])->name('file.index');
Route::post('/file', [FileController::class, 'store'])->name('file.store');
Route::get('/file/{id}', [FileController::class, 'destroy'])->name('file.destroy');
Route::post('/file/{id}', [FileController::class, 'update'])->name('file.update');
Route::get('/file/download/{id}', [FileController::class, 'download'])->name('file.download');
