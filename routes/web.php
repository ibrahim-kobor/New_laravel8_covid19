<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\beneficiariesController;
use App\Http\Controllers\cardsController;
use App\Http\Controllers\localitiesController;
use App\Http\Controllers\statesController;
use App\Http\Controllers\genderController;
use App\Http\Controllers\datasourceController;
use App\Http\Controllers\cardstatusController;
use App\Http\Controllers\covid19Controller;

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

Route::get('importExportView', [MyController::class, 'importExportView']);
Route::get('export', [MyController::class, 'export'])->name('export');
Route::post('import', [MyController::class, 'import'])->name('import');
  
Route::get('/import', function () {
    return view('import');
});
Route::get('/interface', function () {
    return view('interface');
});
Route::get('ben', [beneficiariesController::class, 'ben']);
Route::get('car', [cardsController::class, 'car']);
Route::get('state', [statesController::class, 'state']);
Route::get('locality', [localitiesController::class, 'locality']);
Route::get('gender', [genderController::class, 'gender']);
Route::get('status', [cardstatusController::class, 'status']);
Route::get('source', [datasourceController::class, 'source']);
Route::get('covid', [covid19Controller::class, 'covid']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
