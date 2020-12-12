<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cp\{
  DashboardController,
  AuthController,
  EventController,
  GuestController,
  MessageController,
  EmbedController,
  SettingController,
  GalleryController
};
use App\Http\Controllers\PagesController;


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

Route::get('/',[PagesController::class, 'index']);

Route::group(
  ['prefix' => 'site'],
   function(){

  Route::get('login', [AuthController::class, 'login'])->name('login');
  Route::post('login', [AuthController::class, 'proccess_login'])->name('login.process');
  Route::get('admin', [DashboardController::class, 'index'])->name('home');
  Route::get('admin/guest', [GuestController::class,'index'])->name('guest.index');
  Route::get('admin/event', [EventController::class, 'index']);
  Route::get('admin/message',[MessageController::class,'index']);
  // setting
  Route::get('admin/setting', [SettingController::class,'index']);
  // user
  Route::get('admin/maps', [EmbedController::class,'index']);
  Route::get('admin/gallery',[GalleryController::class, 'index']);
});
