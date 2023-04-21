<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\XenditWebhookController;
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

Route::view('/', 'welcome')->name('home');

Route::prefix('auth')->group(function() {
  Route::controller(AuthenticationController::class)->middleware('guest:web,admin')->group(function() {
    Route::get('/login', 'loginUser');
    Route::get('/register', 'registerUser');
  });
});


Route::middleware('auth:web,admin')->group(function() {
  Route::prefix('user')->group(function() {
    Route::controller(UserController::class)->group(function() {
      Route::get('/dashboard', 'index');
    });

  });
});

// XENDIT WEBHOOK
Route::post('xendit/callback', [XenditWebhookController::class, 'webhook']);

Route::prefix('wisata')->group(function() {
  Route::controller(WisataController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/eksplor-wisata', 'eksplorWisata');
    Route::get('/{id}/detail', 'show');
  });

  Route::middleware('auth:web,admin')->group(function() {
    Route::post('/{id}/invoice', [TransactionController::class, 'createInvoice']);
  });
});
