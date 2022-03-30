<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');







Route::get('/navbar', function () {
    return view('navbar');
 }); 


 Route::get('/editprofile', function () {
    return view('editprofile');
 }); 


 Route::get('/index', function () {
    return view('index');
 }); 


 Route::get('/profile', function () {
    return view('profile');
 }); 


 Route::get('/review', function () {
    return view('review');
 }); 


 Route::get('/seemore', function () {
    return view('seemore');
 }); 


 Route::get('/sidebar', function () {
    return view('sidebar');
 }); 


 Route::get('/successful', function () {
    return view('successful');
 }); 

 
//  Route::get('/userlist', function () {
//     return view('userlist');
//  }); 

 Route::get('/userlist', 'UserListController@index'); 

//  Route::get('userlist', [UserListController::class, 'userlist']);



// // // // Adminsssssssssssss Adminssssssssssss // // // // 
Route::get('/admindashboard', function () {
   return view('admindashboard');
}); 


Route::get('/adminprofile', function () {
   return view('adminprofile');
}); 


Route::get('/adminsettings', function () {
   return view('adminsettings');
}); 


Route::get('/adminlist', function () {
   return view('adminlist');
}); 
