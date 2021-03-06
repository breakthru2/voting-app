<?php

use App\Http\Controllers\ContestantController;
use App\Http\Controllers\PredictionCategoryController;
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

Route::get('/', function () { return view('welcome'); });
Route::get('/admin/', function () { return view('admin.index'); });
Route::get('/admin/users', function () { return view('admin.users'); });

//Prediction Category Route
Route::resource('admin/predictionCategory', PredictionCategoryController::class);
Route::get('/admin/predictionCategory/{id}/delete', [PredictionCategoryController::class, 'destroy']);

//Prediction Category Route
Route::resource('admin/contestant', ContestantController::class);
Route::get('/admin/contestant/{id}/delete', [ContestantController::class, 'destroy']);
