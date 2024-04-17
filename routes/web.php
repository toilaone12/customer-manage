<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuoteController;
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
    Route::get('/', [AccountController::class, 'login'])->name('account.login');
    Route::get('/register', [AccountController::class, 'register'])->name('account.register');
    Route::get('/forget', [AccountController::class, 'forget'])->name('account.forget');
    Route::get('/edit', [AccountController::class, 'edit'])->name('account.edit');
    Route::post('/signIn', [AccountController::class, 'signIn'])->name('account.signIn');
    Route::post('/registerIn', [AccountController::class, 'registerIn'])->name('account.registerIn');
    Route::post('/update', [AccountController::class, 'update'])->name('account.update');
    Route::group(['middleware' => 'check.login'], function () {
        Route::get('/logout', [AccountController::class, 'logout'])->name('account.logout');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        //khach hang
        Route::prefix('customer')->group(function(){
            Route::get('/list', [CustomerController::class, 'list'])->name('customer.list'); //danh sach
            Route::get('/insert', [CustomerController::class, 'insert'])->name('customer.insert'); //form them
            Route::post('/add', [CustomerController::class, 'add'])->name('customer.add'); //them
            Route::get('/edit', [CustomerController::class, 'edit'])->name('customer.edit'); //form sua
            Route::post('/update', [CustomerController::class, 'update'])->name('customer.update'); //sua
            Route::get('/delete', [CustomerController::class, 'delete'])->name('customer.delete'); //xoa
        });
        //bao gia
        Route::prefix('quote')->group(function(){
            Route::get('/list', [QuoteController::class, 'list'])->name('quote.list'); //danh sach
            Route::get('/insert', [QuoteController::class, 'insert'])->name('quote.insert'); //form them
            Route::post('/add', [QuoteController::class, 'add'])->name('quote.add'); //them
            Route::get('/edit', [QuoteController::class, 'edit'])->name('quote.edit'); //form sua
            Route::post('/update', [QuoteController::class, 'update'])->name('quote.update'); //sua
            Route::get('/delete', [QuoteController::class, 'delete'])->name('quote.delete'); //xoa
        });
        //hop dong
        Route::prefix('contract')->group(function(){
            Route::get('/list', [ContractController::class, 'list'])->name('contract.list'); //danh sach
            Route::get('/insert', [ContractController::class, 'insert'])->name('contract.insert'); //form them
            Route::post('/add', [ContractController::class, 'add'])->name('contract.add'); //them
            Route::get('/edit', [ContractController::class, 'edit'])->name('contract.edit'); //form sua
            Route::post('/update', [ContractController::class, 'update'])->name('contract.update'); //sua
            Route::get('/delete', [ContractController::class, 'delete'])->name('contract.delete'); //xoa
        });
        //ho so
        Route::prefix('payment')->group(function(){
            Route::get('/list', [PaymentController::class, 'list'])->name('payment.list'); //danh sach
            Route::get('/insert', [PaymentController::class, 'insert'])->name('payment.insert'); //form them
            Route::post('/add', [PaymentController::class, 'add'])->name('payment.add'); //them
            Route::get('/edit', [PaymentController::class, 'edit'])->name('payment.edit'); //form sua
            Route::post('/update', [PaymentController::class, 'update'])->name('payment.update'); //sua
            Route::get('/delete', [PaymentController::class, 'delete'])->name('payment.delete'); //xoa
        });
    });
});
