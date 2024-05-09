<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployerController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::post("/login",[ClientController::class,"verifier"])->middleware("verifier");
Route::post("/deconnect" ,[ClientController::class,"deconnect"]);
Route::resource("/clients",EmployerController::class);

Route::get("/virements",[ClientController::class , "index"]);
Route::get("/virements/ajouter",[ClientController::class , "create"]);
Route::post("/virements/store",[ClientController::class , "store"]);

Route::get("/retrait",[ClientController::class , "ajouter"]);
Route::post("/retrait/store",[ClientController::class , "retrait"]);

Route::get("/dons",[ClientController::class , "alldons"]);

Route::get("/don/create",  [ClientController::class , "create_don"]);
Route::post("/don/store" , [ClientController::class , "store_don"]);
