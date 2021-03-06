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

Route::prefix('v1')->namespace('App\Http\Controllers\api\v1')->group(function () {
    Route::get('allApplications', 'ApplicationController@getAppList');
    Route::get('gals/{id}', 'GalController@getAppList')->name('gals.getAppList');
});
