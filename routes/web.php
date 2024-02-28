<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\NhanController;
use App\Http\Controllers\Admin\QuanlymauController;
Route::get('backend/login', function () {
    return view('admin.login.form_login');
});
Route::post('backend/login-post', function () {
    $email = Request::get("email");
    $password = Request::get("password");
    $k=DB::table("users")->where("email","=",$email)->where("password","=",$password)->first();
    if($k){
        $user = Auth::user();
        return redirect(url('backend/quanlymohinh'));
    }
        
    else
        return redirect(url('backend/login?notify=invalid'));
});
Route::get('backend/logout', function () {
    Auth::logout();
    return redirect(url('backend/login'));
});
Route::get('backend', function () {
    return view('admin.layout');
})->middleware("check_login");
Route::get('backend/nhan',[NhanController::class,'read']);
Route::get('backend/nhan/detail',[NhanController::class,'detail']);
//create
Route::get('backend/nhan/create',[NhanController::class,'create']);
Route::get('backend/nhan/delete',[NhanController::class,'deletes']);
//create post
Route::post('backend/nhan/create-post',[NhanController::class,'createPost']);
//update
Route::get('backend/nhan/update',[NhanController::class,'update']);
Route::get('backend/nhan/detail',[NhanController::class,'detail']);
//update post
Route::post('backend/nhan/update-post/{id}',[NhanController::class,'updatePost']);
//delete
Route::get('backend/nhan/delete/{id}',[NhanController::class,'delete']);
Route::get('backend/quanlymau',[QuanlymauController::class,'read']);
//create
Route::get('backend/quanlymau/create',[QuanlymauController::class,'create']);
//create post
Route::post('backend/quanlymau/create-post',[QuanlymauController::class,'createPost']);
//update
Route::get('backend/quanlymau/update',[QuanlymauController::class,'update']);
Route::get('backend/quanlymau/detail',[QuanlymauController::class,'detail']);
//update post
Route::post('backend/quanlymau/update-post/{id}',[QuanlymauController::class,'updatePost']);
//delete
Route::get('backend/quanlymau/delete/{id}',[QuanlymauController::class,'delete']);
//---
//---
use App\Http\Controllers\Admin\QuanlymohinhController;
//read
Route::get('backend/quanlymohinh',[QuanlymohinhController::class,'read']);
Route::get('backend/quanlymohinh/detail/{id}',[QuanlymohinhController::class,'detail']);
//create
Route::get('backend/quanlymohinh/create',[QuanlymohinhController::class,'create']);
//create post
Route::post('backend/quanlymohinh/create-post',[QuanlymohinhController::class,'createPost']);
Route::post('backend/quanlymohinh/searchKey',[QuanlymohinhController::class,'searchKey']);
Route::get('backend/quanlymohinh/use/{id}',[QuanlymohinhController::class,'use']);
//delete
Route::get('backend/quanlymohinh/delete/{id}',[QuanlymohinhController::class,'delete']);
Route::post('backend/quanlymohinh/file',[QuanlymohinhController::class,'file']);
//---


//read
Route::get('backend/emailmoi',[ProductsController::class,'read']);
Route::get('backend/emailmoi/detail',[ProductsController::class,'detail']);
//create
Route::get('backend/emailmoi/create',[ProductsController::class,'create']);
//create post
Route::post('backend/products/create-post',[ProductsController::class,'createPost']);
//update
Route::get('backend/products/update/{id}',[ProductsController::class,'update']);
//update post
Route::post('backend/products/update-post/{id}',[ProductsController::class,'updatePost']);
//delete
Route::get('backend/products/delete/{id}',[ProductsController::class,'delete']);
Route::post('/test',[QuanlymohinhController::class,'test']);

