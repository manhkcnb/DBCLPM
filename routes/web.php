<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\LoginController;
use  App\Http\Controllers\MonhocControler;
use  App\Http\Controllers\XeptkbController;

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

Route::get('/login',[LoginController::class,'login' ])->name('login');
Route::post('/loginPost',[LoginController::class,'loginPost' ])->name('loginPost');
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/quenmk',[LoginController::class,'quenmk'])->name('quenmk');
Route::post('/forgotpass',[LoginController::class,'forgotpass' ])->name('forgotpass');
Route::get('/getpasswordnew',[LoginController::class,'getpass' ])->name('getpass');
Route::post('/passwordnew',[LoginController::class,'passwordnew' ])->name('passwordnew');
Route::get('/okpass',[LoginController::class,'ok' ])->name('ok');
Route::post('/okpass',[LoginController::class,'okpass' ])->name('okpass');

Route::get('/quanlymonhoc',[MonhocControler::class,'read' ])->name('monhoc');
Route::get('/themmonhoc',[MonhocControler::class,'create' ])->name('themmonhoc');
Route::post('/themmonhocPost',[MonhocControler::class,'createPost' ])->name('themmonhocpost');
Route::get('/suamonhoc/{id}',[MonhocControler::class,'edit' ])->name('suamonhoc');
Route::post('/suamonhocPost/{id}',[MonhocControler::class,'editPost' ])->name('suammonhocpost');
Route::get('/xoamonhoc/{id}',[MonhocControler::class,'delete' ])->name('xoamonhoc');

Route::get('/xeptkb',[XeptkbController::class,'read' ])->name('xeptkb');
Route::get('/themtkb',[XeptkbController::class,'create' ])->name('themtkb');
Route::post('/themtkbPost',[XeptkbController::class,'createPost' ])->name('themtkbPost');
Route::get('/suatkb/{id}',[XeptkbController::class,'update' ])->name('suatkb');
Route::post('/suatkbPost/{id}',[XeptkbController::class,'updatePost' ])->name('suatkbPost');
Route::get('/xoatkb/{id}',[XeptkbController::class,'delete' ])->name('xoatkb');
Route::get('/sttlop/{id}',[XeptkbController::class,'soluong']);
Route::get('/getday/{id1}/{id2}',[XeptkbController::class,'tg']);
Route::get('/getmon/{id1}/{id2}',[XeptkbController::class,'mon']);
Route::get('/getp/{id1}',[XeptkbController::class,'th']);
Route::get('/getday1/{id1}/{id2}',[XeptkbController::class,'tg1']);
Route::get('/getday2/{id1}/{id2}',[XeptkbController::class,'tg2']);
// Route::post('/themtkbPost',[XeptkbController::class,'read' ])->name('themtkbPost');






