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


// Minh side
Route::group(['namespace'=>'Company'],function(){
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
        Route::get('/','ComLoginController@getLogin');
        Route::post('/','ComLoginController@postLogin');
    });
    Route::get('logout','ComHomeController@getLogout');
    Route::group(['prefix'=>'admin','middleware'=>'CheckLogedOut'], function(){
        Route::get('home','ComHomeController@getHome');
    });
    Route::group(['prefix'=>'register'],function(){
        Route::get('/','ComRegisterController@getRegister');
        Route::post('/','ComRegisterController@postRegister');
    });

});


//Thành side

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::resource('jobs','JobsController');

