<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvitationController;

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
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {

//chat
Route::get('chat' , [FrontendController::class, 'chat'])->name('chat');

//invitaion
Route::post('invite-store' , [InvitationController::class , 'store'])->name('invite-store');
Route::get('password/{id}' , [InvitationController::class , 'password'])->name('password');

Route::post('post-login/{id}', [InvitationController::class, 'postLogin'])->name('login.post');


});





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
