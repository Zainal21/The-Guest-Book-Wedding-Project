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
Route::post('/send/message',[PagesController::class, 'sendMessage'])->name('send.message');

Route::group(['prefix' => 'site'],function(){
  // authentication
  Route::get('login', [AuthController::class, 'login'])->name('login');
  Route::post('login', [AuthController::class, 'proccess_login'])->name('login.process');
  Route::post('logout', [AuthController::class, 'logout'])->name('logout.process');
  // dashboard
  Route::get('admin', [DashboardController::class, 'index'])->name('home');
  Route::get('admin/guest', [GuestController::class,'index'])->name('guest.index');
  // event
  Route::get('admin/event', [EventController::class, 'index'])->name('event.index');
  Route::get('admin/event/create', [EventController::class, 'create'])->name('event.create');
  Route::post('admin/event/save', [EventController::class, 'save'])->name('event.store');
  Route::get('admin/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
  Route::put('admin/event/update/{id}', [EventController::class, 'update'])->name('event.update');
  // message
  Route::get('admin/message',[MessageController::class,'index']);
  // setting
  Route::get('admin/setting', [SettingController::class,'index']);
  Route::put('admin/setting/1', [SettingController::class,'update']);
  // maps
  Route::get('admin/maps', [EmbedController::class,'index']);
  Route::post('admin/maps', [EmbedController::class,'save']);
  // gallery
  Route::get('admin/gallery',[GalleryController::class, 'index']);
  Route::post('admin/gallery',[GalleryController::class, 'save']);
  Route::delete('admin/gallery/{id}',[GalleryController::class, 'delete']);
});
