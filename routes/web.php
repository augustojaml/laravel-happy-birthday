<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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
// FRONT
Route::group([
    'namespace' => 'Front',
    'as'        => 'front.'
], function() {

    // HOME
    Route::get('/', [FrontController::class, 'home'])->name('home');

    // FORM
    Route::get('/form', [FrontController::class, 'form'])->name('form');

    // CONGRATULATIONS
    Route::get('/congratulations/{voucherUser}', [FrontController::class, 'congratulations'])->name('congratulations');

    // REGISTRAR VOUCHER
    Route::post('/register-voucher', [FrontController::class, 'registerVoucher'])->name('registerVoucher');

    // SEND EMAIL
    Route::get('/send-email', [FrontController::class, 'sendEmail'])->name('sendEmail');
});



// ADMIN
Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function() {

    // LOGIN
    Route::get('/', [AdminController::class, 'login'])->name('login');

    /*ROTAS PROTEGIDAS */
    Route::group([
      'middleware' => ['auth']
    ], function() {
      Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    });

    Route::post('submit-login', [AdminController::class, 'submitLogin'])->name('submitLogin');

    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
});
