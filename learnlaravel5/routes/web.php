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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('now', function (){
    return date('Y-m-d H:i:s');
});

Route::match(['get', 'post'], 'multy', function (){
  return "<h3>This is multy route</h3>";
});

// Any route
Route::any('multy2', function (){
    return "<h3>This is multy2 route</h3>";
});

// route parameter
//Route::get('user/{id}', function ($id){
//  return "User-Id-" . $id;
//});
//
//Route::get('user/{name?}', function ($name = null){
//    return 'User-name-' . $name;
//})->where('name', '[A-Za-z]+');

// where condition regular
//Route::get('user/{id}/{name?}', function ($id, $name='gongbiao'){
//    return "<h3>User-id-{$id}-name={$name}</h3>";
//})->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

// route alias
//Route::get('user/center', ['as' => 'center', function (){
//    return route('center');
//}]);

// route output view
Route::get('user/view', function (){
  return view('welcome');
});


// route group
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function (){
   Route::get('/', 'HomeController@index');
   Route::resource('articles', 'ArticleController');
});



