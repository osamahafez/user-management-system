<?php

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


// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

// Route::group(['middleware' => ['web', 'auth']], function(){
    
//     Route::get('/home', function() {

//         if(Auth::user()->admin == 0) {
//             return view('home');
//         }
//         else {
//             return redirect('/admin-panel');
//         }
//     });

//     Route::get('/admin-panel', function() {

//         if(Auth::user()->admin == 1) {
//             return view('adminPanel');
//         }
//         else {
//             return redirect('/home');
//         }
//     });
// });

Route::get('/', 'LandingController@index');
Route::get('/home', 'HomeController@index')->middleware(['web','auth']);
Route::get('/admin-panel', 'AdminController@index')->middleware(['web','auth']);

Route::get('/users', 'UsersController@index')->middleware(['web','auth']);
Route::get('/users/create', 'UsersController@create')->middleware(['web','auth']);
Route::post('/users/store', 'UsersController@store')->middleware(['web','auth']);
Route::get('/users/edit/{id}', 'UsersController@edit')->middleware(['web','auth']);
Route::get('/users/{id}', 'UsersController@show')->middleware(['web','auth']);
Route::put('/users/{id}', 'UsersController@update')->middleware(['web','auth']);
Route::delete('/users/{id}', 'UsersController@destroy')->middleware(['web','auth']);

Route::get('/roles', 'RolesController@index')->middleware(['web','auth']);
Route::get('/roles/{id}', 'RolesController@show')->middleware(['web','auth']);

Route::get('/profile', 'ProfileController@show')->middleware(['web','auth']);
Route::get('/profile/edit', 'ProfileController@edit')->middleware(['web','auth']);
Route::put('/profile', 'ProfileController@update')->middleware(['web','auth']);