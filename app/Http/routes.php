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

Route::get('/', 'IndexController@execute');
Route::post('/', 'IndexController@execute');

Route::post('home', [
    'as' => 'home',
    'uses' => 'IndexController@execute'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function (){
    //admin - main admin page
    Route::get('/', function (){

        if(view()->exists('admin.index')){
           $count = DB::table('speakers')->count();
           $userCount = DB::table('registrations')->count();

            $data = ['title'=>'Панель администратора', 'speakerCount'=>$count, 'usersCount'=>$userCount];

            return view('admin.index', $data);
        };


    });

    //admin/programs
    Route::group(['prefix'=>'programs'],function() {
        ///admin/programs
        Route::get('/',['uses'=>'ProgramController@execute','as'=>'programs']);
        //admin/programs/add
        Route::match(['get','post'],'/add',['uses'=>'ProgramAddController@execute','as'=>'programsAdd']);
        //admin/edit/--some id--
        Route::match(['get','post','delete'],'/edit/{program}',['uses'=>'ProgramEditController@execute','as'=>'programsEdit']);
    });

    //admin/videos
    Route::group(['prefix'=>'videos'],function() {
        ///admin/videos
        Route::get('/',['uses'=>'VideoController@execute','as'=>'videos']);
        //admin/videos/add
        Route::match(['get','post'],'/add',['uses'=>'VideoAddController@execute','as'=>'videosAdd']);
        //admin/edit/--some id--
        Route::match(['get','post','delete'],'/edit/{video}',['uses'=>'VideoEditController@execute','as'=>'videosEdit']);
    });

    //admin/menus
    Route::group(['prefix'=>'menus'],function() {
        ///admin/menus
        Route::get('/',['uses'=>'MenuController@execute','as'=>'menus']);
        //admin/menus/add
        Route::match(['get','post'],'/add',['uses'=>'MenuAddController@execute','as'=>'menusAdd']);
        //admin/edit/--some id--
        Route::match(['get','post','delete'],'/edit/{menu}',['uses'=>'MenuEditController@execute','as'=>'menusEdit']);
    });

    //to do prices

    Route::group(['prefix'=>'prices'],function() {
        ///admin/prices
        Route::get('/',['uses'=>'PriceController@execute','as'=>'prices']);
        //admin/prices/add
        Route::match(['get','post'],'/add',['uses'=>'PriceAddController@execute','as'=>'pricesAdd']);
        //admin/edit/--some id--
        Route::match(['get','post','delete'],'/edit/{price}',['uses'=>'PriceEditController@execute','as'=>'pricesEdit']);
    });
    Route::group(['prefix'=>'registrations'],function() {
        ///admin/registrations
        Route::get('/',['uses'=>'RegistrationController@execute','as'=>'registrations']);

        //admin/edit/--some id--
        Route::match(['get','post','delete'],'/edit/{registration}',['uses'=>'RegistrationEditController@execute','as'=>'registrationsEdit']);
    });
    Route::group(['prefix'=>'speakers'],function() {
        ///admin/speakers
        Route::get('/',['uses'=>'SpeakerController@execute','as'=>'speakers']);

        //admin/edit/--some id--
        Route::match(['get','post','delete'],'/edit/',['uses'=>'SpeakerEditController@execute','as'=>'speakersEdit']);
    });

});
Route::get('/thanks', ['uses'=>'ThanksController@execute','as'=>'thanks']);

