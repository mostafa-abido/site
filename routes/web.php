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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return 'welcome';
});

Route::get('/test2/{id}', function ($id) {
    return $id;
});

Route::get('/test3/{id?}', function () {
    return 'welcome';
});

// route name

Route::namespace('Front')->group(function () {
    // all route only access controller or methods in folder name front
    Route::get('users', 'UserController@showUserName');
});


Route::group(['namespace' => 'Admin'], function(){
    Route::get('second','SecondController@showString');
});


Route::group(['namespace' => 'Admin'], function() {
    Route::get('second','SecondController@showString0') -> middleware('auth');
    Route::get('second1','SecondController@showString1');
    Route::get('second2','SecondController@showString2');
    Route::get('second3','SecondController@howString3');
});
Route::get('login',function () {
    return 'must be login to access this route' ;
}) -> name ('login') ;


  resource v 19 -> تستخدم لمفردها اما الريسورس تستخدم للكل اى حاجه من النوع جيت اقدى انادى عليها
Route::get('news','NewsController@index' );
Route::post('news','NewsController@store' );
Route::get('news/create','NewsController@create' );
Route::get('news/{id}/edit','NewsController@edit' );
Route::delete('news/{id}','NewsController@delete' );
 

Route::resource('news','NewsController' );

//view 

Route::get('index','Front\UserController@getIndex') ;

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about');
});
*/

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware ('verified');

Route::get('/dashboard', function () {
    return 'dashboard';
});




