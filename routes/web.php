<?php
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

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



