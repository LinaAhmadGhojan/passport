<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CountryController,SecondPageController,ThirdPageController,AdminController};
use  App\Http\Controllers\Admin\AdminAuthController;
use  App\Http\Controllers\User\UserController;
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

Route::get('first/page', [CountryController::class, 'index'])->name('register.RS4IT')->middleware('user');
Route::post('first/page', [CountryController::class, 'sendemailforcomplete'])->name("first.page");

Route::get('two/page/{id}', [SecondPageController::class, 'index'])->name('complete.register')->middleware('user');;
Route::post('two/page/{id}', [SecondPageController::class, 'completepassport'])->name("complete.passport");

Route::get('three/page/{id}', [ThirdPageController::class, 'index'])->name('complete.part3')->middleware('user');;
Route::post('three/page/{id}', [ThirdPageController::class, 'completeResidence'])->name("complete.residence");

Route::post('review/page/{id}', [ThirdPageController::class, 'review'])->name('review.page')->middleware('user');;
Route::get('finall/page', [ThirdPageController::class, 'finall'])->name('finall.page')->middleware('user');;


Route::get('/login', [UserController::class, 'getLogin'])->name('login');
Route::post('/login', [UserController::class, 'postLogin'])->name('login.post');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
    Route::get('/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');
});
Route::get('admin/dashboard/order', [AdminController::class, 'informationOrder'])->name('admin.information.order')->middleware('admin');
Route::get('admin/dashboard/Eligible-stay', [AdminController::class, 'eligibleStay'])->name('admin.eligible.stay')->middleware('admin');;
Route::get('admin/dashboard/Extra-night', [AdminController::class, 'extraNight'])->name('admin.extra.night')->middleware('admin');;
Route::get('admin/dashboard/Send-invitation', [AdminController::class, 'getSendMail'])->name('admin.get.send.invitation')->middleware('admin');;
Route::post('admin/dashboard/Send-invitation', [AdminController::class, 'postSendMail'])->name('admin.post.send.invitation')->middleware('admin');;


