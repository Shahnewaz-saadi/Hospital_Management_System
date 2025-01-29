<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\mail;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminController\editdoctor;

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
    Mail::to('someone.anyone.none@gmail.com')->send(new HelloMail);

    return view('welcome');
});

Route::get('/',[HomeController::class,'index']);



Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::get('admin_token_view', [AdminController::class, "token"] );

Route::post('/add_doctor',[AdminController::class,'upload']);
Route::post('/appoinment',[HomeController::class,'appoinment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/showappointment',[AdminController::class,'showappointment']);
Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::post('/payment',[AdminController::class,'Payment']);

Route::get('/showToken',[AdminController::class,'TokenShow']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);
Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);
Route::get('/emailview/{id}',[AdminController::class,'emailview']);
Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/doctors',[HomeController::class,'doctors']);
Route::get('/contract',[HomeController::class,'contract']);

Route::post('/userPayment',[HomeController::class,'userPayment']);