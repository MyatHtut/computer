<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});


Route::group(['middleware' => 'auth'], function() {

    Route::resource('ex', 'ExController');
    Route::resource('blog', 'BlogController');
    Route::resource('acc', 'AccController');
    Route::resource('spec', 'SpecController');
//    Route::get('/specs/api', 'SpecController@json');


//    Route::resource('seminars/api', 'SeminarController@json');
//    Route::resource('enters/api', 'MusicController@json');
//    Route::get('promo/api', 'PromotionController@json');
//    Route::get('exe/api', 'ExController@json');

    Route::get('/searchenter', 'MusicController@EntertainmentSeach');
    Route::get('/shenter', 'MusicController@showform');


    Route::get('/home', function () {
        return view('index');
    });

});

Route::get('/specs/api', 'SpecController@json');
Route::get('/accs/api', 'AccController@json');
Route::get('/blogs/api', 'BlogController@json');
Route::get('/shops/api', 'ExController@json');

Route::get('/specs/api/{id}', 'SpecController@getSpec');




//Route::get('fav/api', 'FavController@json');
//Route::get('/fav/{exId}', 'FavController@addfav');
//Route::get('/fav/{proId}', 'FavController@addfav');
//Route::get('/favshow', 'FavController@showfav');




//
//Route::group(['prefix' => 'api'], function() {
//
//    Route::post('login', 'Api\AuthController@login');
//
//    Route::group(['middleware' => ['jwt.auth', 'jwt.refresh']], function() {
//        Route::post('logout', 'Api\AuthController@logout');
//
//        Route::get('test', function(){
//            return response()->json(['foo'=>'bar']);
//        });
//    });
//
//});





Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
