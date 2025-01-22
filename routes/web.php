<?php
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('admin.auth.login');
});

Route::get('/admin/index', function () {
    return view('admin.index');
})->name('dashboard')->middleware('auth');

Route::get('/register', function () {
    return view('admin.auth.register');
})->name('register');

Route::get('/login',[loginController::class,'login'])->name('login');
Route::get('/logout',[loginController::class,'logout'])->name('logout');
Route::post('/login',[loginController::class,'user_login'])->name('user');
Route::post('/register',[loginController::class,'register'])->name('register');
Route::get('/forgotpassword',[loginController::class,'forgotpassword'])->name('forgotpassword');

Route::get('/admin/Product',[ProductController::class,'index'])->name('product');
Route::get('/admin/Product/fetch',[ProductController::class,'getdata'])->name('productdata');
Route::POST('/admin/Product/index',[ProductController::class,'saveproduct'])->name('saveproduct');
Route::DELETE('/admin/Product/delete/{id}',[ProductController::class,'deleteproduct'])->name('deleteproduct');
Route::get('/admin/Product/edit/{id}',[ProductController::class,'editproduct'])->name('editproduct');
Route::PATCH('/admin/Product/update',[ProductController::class,'updatedata'])->name('updateproduct');

