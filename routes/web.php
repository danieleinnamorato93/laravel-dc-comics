<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/guitars", [GuitarController::class,"index"])->name("guitar.index");
Route::get("/guitars/create", [GuitarController::class,"create"])->name("guitar.create");
Route::get("/guitars/{id}", [GuitarController::class,"show"])->name("guitar.show");

