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


// Minh side-CompanyRoute
Route::group(['namespace'=>'Company'],function(){
    //Company Login-------------------------------------------------------
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
        Route::get('/','ComLoginController@getLogin');
        Route::post('/','ComLoginController@postLogin');
    });
    //Company Logout-------------------------------------------------------
    Route::get('logout','ComHomeController@getLogout');
    //Route for home, list-job, profile
    Route::group(['prefix'=>'company','middleware'=>'CheckLogedOut'], function(){
        Route::get('home','ComHomeController@getHome');
        Route::group(['prefix'=>'listjob'], function(){
            Route::get('/','ComListJobController@getListJob');
            Route::get('/addJob','ComListJobController@addJob');
        });
        ///
        Route::group(['prefix'=>'profile'],function(){
            Route::get('/','ComProfileController@getComProfile');

            Route::get('EditProfile/{id}','ComProfileController@getEditComProfile');
            Route::post('EditProfile/{id}','ComProfileController@postEditComProfile');
        });
      
    });

   //Company Register----------------------------------------------------------
    Route::group(['prefix'=>'register'],function(){
        Route::get('/','ComRegisterController@getRegister');
        Route::post('/','ComRegisterController@postRegister');
    });

});
//Admin route------------------------------------------------------------------
Route::group(['namespace'=>'Admin'],function(){
    Route::group(['prefix'=>'admin'],function(){
        //Admin Login---------------------------------------------
        Route::get('/login','AdminLoginController@getLogin');
        Route::post('/login','AdminLoginController@postLogin');
        //Admin Dashboard------------------------------------------
        Route::get('home','AdminHomeController@getHome');

    });
});

//Student route-----------------------------------------------------------------
Route::group(['namespace'=>'Student'],function(){
    //Student logout
    Route::get('logouts','StudentHomeController@getLogout');
    Route::group(['prefix'=>'student'],function(){
        //Student Login---------------------------------------------------------
        Route::get('/login','StudentLoginController@getLogin');
        Route::post('/login','StudentLoginController@postLogin');
        //Student dashboard----------------------------------------------------
        Route::get('home','StudentHomeController@getHome');

    });
});


//Thành side

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/choose', 'PagesController@choose');

Route::resource('jobs','JobsController');