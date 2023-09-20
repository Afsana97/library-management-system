<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDashboardController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');




Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm'])->name('admin.loginForm');
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});
Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth:admin');
    Route::get('/category/add', [CategoryController::class, 'index'])->name('category.add');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/manage', [CategoryController::class, 'manage'])->name('category.manage');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');



    Route::get('/book/add', [BookController::class, 'index'])->name('book.add');
    Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
    Route::get('/book/manage', [BookController::class, 'manage'])->name('book.manage');
    Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
    Route::post('/book/update/{id}', [BookController::class, 'update'])->name('book.update');
    Route::get('/book/destroy/{id}', [BookController::class, 'destroy'])->name('book.destroy');
    Route::get('/change/status/{id}', [BookController::class, 'changeStatus'])->name('change.status');
    
    Route::get('/borrow/request/{id}/{u_id}', [DashboardController::class,'borrowRequest'])->name('borrow-request');
    Route::get('/borrow/list', [DashboardController::class,'borrowList'])->name('borrow.list');
    Route::get('/borrow/accept/borrow/accept/{id}/{u_id}', [DashboardController::class, 'acceptBorrow'])->name('admin.accept.boorow');
    Route::get('/borrow/accept/borrow/cancel', [DashboardController::class, 'cancelBorrow'])->name('admin.cancel.boorow');
    Route::get('/return/request/{id}/{b_id}', [DashboardController::class,'returnRequest'])->name('return-request');

});


Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class,'index'])->name('dashboard');
    Route::get('/category/books/{name}/{u_id}', [UserDashboardController::class,'showBooks'])->name('category.books');
    Route::get('/borrowed/books/{u_id}', [UserDashboardController::class,'borrowdBooks'])->name('borrowed.books');
    
});
