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

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DevolutionController;
use App\Http\Controllers\TitheController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/cadastro/list/', [RegisterController::class, 'index'])->middleware('auth');
Route::get('/admin/cadastro/new', [RegisterController::class, 'new'])->middleware('auth');
Route::get('/admin/cadastro/edit/{id}', [RegisterController::class, 'edit'])->middleware('auth');
Route::post('/admin/cadastro/create', [RegisterController::class, 'create'])->middleware('auth');

Route::get('/admin/dizimista/create/{id}', [TitheController::class, 'create'])->middleware('auth');
Route::get('/admin/dizimista/createall', [TitheController::class, 'createall'])->middleware('auth');
Route::get('/admin/dizimista/list', [TitheController::class, 'list'])->middleware('auth');


Route::get('/admin/lancamento/create/{id}', [DevolutionController::class, 'create'])->middleware('auth');
#Route::delete('/admin/lancamento/delete/{id}', [DevolutionController::class, 'destroy'])->middleware('auth');


Route::get('/admin/lancamento', [DevolutionController::class, 'launch'])->middleware('auth');
Route::get('/admin/lancamento/list', [DevolutionController::class, 'index'])->middleware('auth');
Route::get('/admin/lancamento/update/{id}', [DevolutionController::class, 'update'])->middleware('auth');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');
});
