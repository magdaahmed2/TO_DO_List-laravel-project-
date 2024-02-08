<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
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


Route::get('/',[ItemsController::class,'index'])->name("items.list");
Route::get('/delete/{id}',[ItemsController::class,'destroy'])->name("items.delete");
Route::get('/create',[ItemsController::class,'create'])->name("items.create");
Route::post("/store",[ItemsController::class,"store"])->name("items.store");
Route::get("/edit/{id}",[ItemsController::class,"edit"])->name("items.edit");
Route::put("/update/{id}",[ItemsController::class,"update"])->name("items.update");

