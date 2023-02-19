<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ItemsController;

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

// User Routes Start Here

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [userController::class, 'insertUser']);
Route::post('/user', [userController::class, 'store']);
Route::get('/userView', [userController::class, 'userview']);
Route::post('/userView', [userController::class, 'userview']);  //try
Route::get('/userdelete/{id}', [userController::class, 'deleteUser']);
Route::get('/useredit/{id}', [userController::class, 'editUser']);
Route::post('/userupdate/{id}', [userController::class, 'updateUser']);
Route::get('/userView/{id}', [userController::class, 'updateUser']);

// User Route End Here



// Items Routes Start Here
Route::get('/items',[ItemsController::class, 'create']);
Route::post('/additems',[ItemsController::class, 'store']);

// Items Routes End Here
