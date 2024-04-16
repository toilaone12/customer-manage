<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::prefix('admin')->group(function(){
        Route::get('/list', [CustomerController::class, 'list'])->name('customer.list'); //danh sach
        Route::get('/insert', [CustomerController::class, 'insert'])->name('customer.insert'); //form them
        Route::post('/add', [CustomerController::class, 'add'])->name('customer.add'); //them
        Route::get('/edit', [CustomerController::class, 'edit'])->name('customer.edit'); //form sua
        Route::post('/update', [CustomerController::class, 'update'])->name('customer.update'); //sua
        Route::get('/delete', [CustomerController::class, 'delete'])->name('customer.delete'); //xoa
    });
});
