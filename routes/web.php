<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\PortfolioController;
use App\Http\Controllers\frontend\ResumeController;
use App\Http\Controllers\frontend\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'about']);
Route::get('/service',[ServiceController::class,'service']);
Route::get('/contact',[ContactController::class,'contact']);
Route::get('/portfolio',[PortfolioController::class,'portfolio']);
Route::get('/resume',[ResumeController::class,'resume']);
Route::get('/blog',[BlogController::class,'blog']);



// Route for email

Route::get('/email', [EmailController::class, 'create']);
Route::post('/email', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');


// for download cv

Route::get('/download',[CvController::class,'downloads'])->name('download');