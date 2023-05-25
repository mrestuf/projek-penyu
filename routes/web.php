<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CrowdfundingController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\WelcomeController;
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

// Route::view('/', 'welcome')->name('home');

Route::controller(WelcomeController::class)->group(function(){
  Route::get('/','index');
});

Route::prefix('auth')->group(function() {
  Route::controller(AuthenticationController::class)->middleware('guest:web')->group(function() {
    Route::get('/login', 'loginUser');
    Route::get('/register', 'registerUser');
  });
});


Route::middleware('auth:web')->group(function() {
  Route::prefix('user')->group(function() {
    Route::controller(UserController::class)->group(function() {
      Route::get('/dashboard', 'index');
      Route::get('/purchases/list', 'purchasesList');
    });

  });
});

Route::prefix('pegawai')->group(function() {
  Route::controller(PegawaiController::class)->group(function() {
    Route::get('/dashboard', 'index');
  });
});

// XENDIT WEBHOOK
Route::post('xendit/callback', [XenditWebhookController::class, 'webhook']);

Route::prefix('wisata')->group(function() {
  Route::controller(WisataController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/', 'eksplorWisata');
    Route::get('/{id}/detail', 'show');
  });

  Route::middleware('auth:web,admin')->group(function() {
    Route::post('/{id}/invoice', [TransactionController::class, 'createInvoice']);
  });
});

Route::prefix('pengembangan')->group(function(){
  Route::controller(CrowdfundingController::class)->group(function(){
    Route::get('/','eksplorCrowdfunding');
    Route::get('/{id}/detail', 'show');
  });

  Route::middleware('auth:web,admin')->group(function() {
    Route::post('/{id}/invoice', [TransactionController::class, 'createInvoice']);
  });
});

Route::prefix('blog')->group(function(){
  Route::controller(BlogController::class)->group(function(){
    Route::get('/','index');
    Route::get('/{id}/detail', 'show');
  });
});
