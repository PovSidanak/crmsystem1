<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AuthController::class)->group(function(){
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


//Normal user route list
Route::middleware(['auth', 'user-access:user'])->group(function(){
    Route::get('home',[HomeController::class, 'index'])->name('home');
});

//Admin route list
Route::middleware(['auth', 'user-access:admin'])->group(function(){
    Route::get('/admin/home',[HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/profile',[AdminController::class, 'profilepage'])->name('admin/profile');

    Route::get('/admin/lead',[LeadController::class, 'index'])->name('admin/lead');
    Route::get('/admin/lead/create',[LeadController::class, 'create'])->name('admin/lead/create');
    Route::post('/admin/lead/store',[LeadController::class, 'store'])->name('admin/lead/store');
    Route::get('/admin/lead/show{id}',[LeadController::class, 'show'])->name('admin/lead/show');
    Route::get('/admin/lead/edit/{id}',[LeadController::class, 'edit'])->name('admin/lead/edit');
    Route::put('/admin/lead/edit/{id}',[LeadController::class, 'update'])->name('admin/lead/update');
    Route::delete('/admin/lead/destroy/{id}',[LeadController::class, 'destroy'])->name('admin/lead/destroy');

});



