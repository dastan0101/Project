<?php

use Illuminate\Support\Facades\Route;
use App\Htto\Controllers\MailController;
// use App\Htto\Controllers\StudentController;


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
    return view('Project');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/map', function () {
    return view('map');
});

Route::get('/login', 'App\Http\Controllers\StudentController@login');

Route::post('/login', 'App\Http\Controllers\StudentController@store')->name('addstudent');

Route::get('login/{lang}', function($lang){
    App::setlocale($lang);
    return view('login');
});

Route::get('/project', 'MailController@index');
Route::post('sendemail/send', 'MailController@send')->name('sendemail');