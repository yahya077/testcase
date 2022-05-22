<?php

use Custom\Models\FirstProvider;
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
    $firstProvider = new FirstProvider();
    return response()->json($firstProvider->response());
    return view('welcome');
});

Route::get('/first', [\App\Http\Controllers\FirstProviderController::class,'index'])->name(config('custom.providers.first.routeName'));
Route::get('/second', [\App\Http\Controllers\SecondProviderController::class,'index'])->name(config('custom.providers.second.routeName'));

Route::get('/tasks', [\App\Http\Controllers\TaskController::class,'index']);
