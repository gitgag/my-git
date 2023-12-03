<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Page;
use App\Http\Controllers\UpdateData;
use App\Http\Controllers\LogIn;
use App\Http\Controllers\RegData;

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

Route::get('/',[Page::class, 'homedata'] )->name('home-page');

Route::get('/welcome', function () {
    return view('welcome');
    
});

Route::get('/about', [Page::class, 'aboutdata']);

Route::get('/services', function(){ 
    return view('services');
});

Route::get('/contact', function(){ 
    return view('contact');
});

Route::get('/dbtest', function() 
{
return view('dbcheck');
}

);

Route::get('/web-admin',[UpdateData::class,'showdata'])->name('update-page');
Route::post('/update',[UpdateData::class,'storedata'])->name('postdata');
Route::get('/admin-login', [Login:: class,'index'])->name('login-page');
Route::post('/log-in', [LogIn:: class, 'LoginHere'])->name('login');
Route::get('/register', [RegData::class, 'regform'])->name('reg-page');
Route::post('/register-process', [RegData::class, 'postReg'])->name('post-reg');
Route::get('/logout', [LogIn::class, 'logout'])->name('logout');


