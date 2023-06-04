<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Models\loginModel;

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
    $list_of_fruits = loginModel::where('estado',1)->get();
    return view('formulario', compact('list_of_fruits'));
});




Route::post('save',[loginController::class,'save']);
Route::get('edit{id}',[loginController::class,'edit']);
Route::post('update{id}',[loginController::class,'update']);
Route::get('delete{id}',[loginController::class,'delete']);