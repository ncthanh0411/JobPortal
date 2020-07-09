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
    //Add CV route
    Route::post('/addCV', 'AddCVController@index');
    //Company Login-------------------------------------------------------
    Route::group(['prefix'=>'login','middleware'=>'CheckLogedIn'],function(){
        Route::get('/','ComLoginController@getLogin');
        Route::post('/','ComLoginController@postLogin');
    });
    //Company Logout-------------------------------------------------------
    Route::get('logout','ComHomeController@getLogout');
    //Route for home, list-job, profile
    Route::group(['prefix'=>'company','middleware'=>'CheckLogedOut'], function(){
        // Route::get('home','ComHomeController@getHome');
        Route::group(['prefix'=>'listjob'], function(){
            Route::get('/','ComListJobController@getListJob');
            Route::get('/addJob','ComListJobController@addJob');
            Route::get('/updateJob/{id}','ComListJobController@updateJob');
        });


        
        //Manage CV from Company
        Route::group(['prefix'=>'watchcv'], function(){
            Route::get('/','AddCVController@companyIndex');
            Route::get('/student/{id}','AddCVController@getStudent');
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

    Route::get('logoutss','AdminHomeController@getLogout');

    Route::group(['prefix'=>'admin'],function(){
        //Admin Login------------------------------------------------------------
        Route::group(['prefix'=>'login','middleware'=>'CheckAdminLogedIn'], function(){
            Route::get('/','AdminLoginController@getLogin');
            Route::post('/','AdminLoginController@postLogin');
        });
        
       
        //Admin list jobs---------------------------------------------------------------
        
        Route::get('/home','AdminHomeController@getJob')->middleware('CheckAdminLogedOut');
    
        
        //Admin approve jobs---------------------------------------------------------------
        
        Route::get('watch/{id}','AdminApproveController@getdetail');
        Route::post('watch/{id}','AdminApproveController@postdetail');

        //Addmin manage account------------------------------------------------------------

        Route::get('/account','AdminAccountController@getAccount');


        //Admin add account Student---------------------------------------------------------
        Route::group(['prefix'=>'CreateAccount'],function(){
            Route::get('/','AdminAccountController@getCreateAccount');
            Route::post('/','AdminAccountController@postCreateAccount');
        });

    });
});

//Student route-----------------------------------------------------------------



Route::group(['namespace'=>'Student'],function(){
    //Student logout
    Route::get('logouts','StudentHomeController@getLogout');
    Route::group(['prefix'=>'student'],function(){
        //Student Login---------------------------------------------------------
       Route::group(['prefix'=>'login','middleware'=>'CheckStudentLogedIn'],function(){
           
            Route::get('/','StudentLoginController@getLogin');
            Route::post('/','StudentLoginController@postLogin');
       }); 
        Route::resource('/profile', 'StudentController')->middleware('CheckStudentLogedOut');
        //Student dashboard----------------------------------------------------
        
        Route::get('/home','StudentHomeController@getHome')->middleware('CheckStudentLogedOut');
        Route::get('/Company/{id}', 'StudentHomeController@getCompany');
    });
});


//Thành side

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/choose', 'PagesController@choose');

Route::resource('jobs','JobsController');