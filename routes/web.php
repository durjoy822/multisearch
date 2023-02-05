<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SerachController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dashboard', [ServiceController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/', [ServiceController::class, 'service'])->name('service.index');
Route::get('/service_add', [ServiceController::class, 'serviceAdd'])->name('service.add');
Route::post('/service_store', [ServiceController::class, 'serviceStore'])->name('service.store');
Route::get('/service_edit/{id}', [ServiceController::class, 'serviceEdit'])->name('service.edit');
Route::post('/service_update', [ServiceController::class, 'serviceUpdate'])->name('service.update');
Route::post('/service_delete', [ServiceController::class, 'serviceDelete'])->name('service.delete');

Route::post('/service_search', [SerachController::class, 'serviceSearch'])->name('service.search');
