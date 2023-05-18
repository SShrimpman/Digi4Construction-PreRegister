<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserStandController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\PreRegisterMS;



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

Route::get('temp', function () {
    return view('temp');
});

/**FIRST FORM  */
//Form route with fields
Route::get('form', [UserController::class, 'index']);
//Store route connected with database
Route::post('store', [UserController::class, 'store']);

//sucessfully page
Route::get('sucess', function () {
    return view('sucess');
});



/**SECOND FORM ROUTES !!! */

Route::post('storeUserStand', [UserStandController::class, 'store']);
Route::get('concreta/$dH9z4UP7^M', function () {
    return view('standForm');
});
