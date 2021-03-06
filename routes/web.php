<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Online_admController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mind', function () {
    return view('./demo/index');
});

Route::get('/login', function () {
    return view('./demo/login');
});

Route::get('/rough', function () {
    return view('./demo/rough');
});

Route::get('/final', function () {
    return view('./demo/mind_final');
});
Route::get('/text', function () {
    return view('./demo/text');
});

Route::get('/home', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/course', function () {
    return view('course');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/Online Admission',function(){
    return view('online_admission');
});
Route::get('/Human Resource',function(){
    return view('humanR');
});
Route::get('/search',function(){
    return view('landing');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/job',function(){
    return view('job_page');
});


Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

Route::post('/Register',[Online_admController::class,'sendEmail'])->name('online.send');