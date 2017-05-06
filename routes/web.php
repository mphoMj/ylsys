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
//Route::get('login','Auth\AuthController@getLogin');
//Route::post('login','Auth\AuthController@postLogin');

Route::get('/', function () {

    /** $user =new \App\Usertype;
     * $user->usertypename="Area Director";
     * $user->description="Leads teams and ensures all leaders are trained";
     * $user->save();
     *
     * $user =new \App\User;
     * $user->email="ddd@gmail.com";
     * $user->firstname="gdggdg";
     * $user->lastname="kfkkf";
     * $user->gender="male";
     * $user->usertype_id="1";
     * $user->gender="male";
     * $user->password =bcrypt('22222');
     * $user->save();
     *
     * $user =\App\Area::all();
     *
     * var_dump($user);**/


    return view('index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('admin.dashboard');
});



Route::group(/**
 *
 */
    ['middleware' => 'web'], function () {

    Route::group(['prefix' => 'admin'], function () {
        Route::get('addarea', function () {
            return view('admin.addarea');
        });

        Route::get('adduser', function () {
            return view('admin.adduser');
        });
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        });
    });
    Route::group(['prefix' => 'areadirector'], function () {
        Route::get('addteam', function () {
            return view('areadirector.addteam');
        });
        Route::get('addclub', function () {
            return view('areadirector.addclub');
        });

        Route::get('adduser', function () {
            return view('areadirector.adduser');
        });
        Route::get('dashboard', function () {
            return view('areadirector.dashboard');
        });
        Route::get('campstats', function () {
            return view('areadirector.campstats');
        });
        Route::get('recruitment', function () {
            return view('areadirector.recruitment');
        });
    });
    Route::group(['prefix' => 'parent'], function () {
        Route::get('parent', function () {
            return view('parent.parent');

        });
        Route::get('kidinvitation', function () {
            return view('parent.kidinvitation');
        });
        Route::get('contribution', function () {
            return view('parent.contribution');
        });
    });
    Route::group(['prefix' => 'volunteer'], function () {
        Route::get('recruitment', function () {
            return view('volunteer.recruitment');
        });
        Route::get('addclub', function () {
            return view('volunteer.addclub');
        });

        Route::get('adduser', function () {
            return view('volunteer.adduser');
        });
        Route::get('dashboard', function () {
            return view('volunteer.dashboard');
        });
    });
    Route::group(['prefix' => 'teamleader'], function () {
        Route::get('recruitment', function () {
            return view('teamleader.recruitment');
        });
        Route::get('addclub', function () {
            return view('teamleader.addclub');
        });

        Route::get('dashboard', function () {
            return view('teamleader.dashboard');
        });

    });
    Route::group(['prefix' => 'adolescent'], function () {
        Route::get('/', 'AdolescentController@index');
        Route::get('create', 'AdolescentController@create');
        Route::post('/', 'AdolescentController@store');

    });

});
