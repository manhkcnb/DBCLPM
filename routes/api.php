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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\Admin\QuanlymohinhController;
//read
Route::get('backend/quanlymohinh',[QuanlymohinhController::class,'read']);
Route::get('backend/quanlymohinh/detail/{id}',[QuanlymohinhController::class,'detail']);
//create
Route::get('backend/quanlymohinh/create',[QuanlymohinhController::class,'create']);
//create post
Route::post('backend/quanlymohinh/create-post',[QuanlymohinhController::class,'createPost']);
//delete
Route::get('backend/quanlymohinh/delete/{id}',[QuanlymohinhController::class,'delete']);
Route::post('/test',[QuanlymohinhController::class,'test']);
Route::post('backend/quanlymohinh/file',[QuanlymohinhController::class,'file']);
Route::get('backend/quanlymohinh/file',[QuanlymohinhController::class,'file']);