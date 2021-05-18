<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('property', 'App\Http\Controllers\PropertyController');
//Route::resource('employee', 'App\Http\Controllers\EmployeeController');

ApiRoute::group(
    [
        'middleware' => ['api'],
        'namespace' => 'App\Http\Controllers'],
    function () {
        //Route::resource('employee', 'App\Http\Controllers\EmployeeController');
        //ApiRoute::resource('employee', 'UserController');
        ApiRoute::resource('employee', 'EmployeeController');
    }
);
