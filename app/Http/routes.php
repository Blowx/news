<?php
/*Route::get('/{name}', ['uses' => 'TestController@index', 'as' => 'test.index']);
Route::get('/', ['uses' => 'MainController@main', 'as' => 'main.index']);*/
//Route::get('/', ['uses'=> 'IndexController@index', 'as' => 'main.index']); //
//Route::get('db', ['uses' =>'DbController@index']);






/*Route::get('/{name}', ['uses' => 'TestController@index', 'as' => 'test.index']);

Route::get('/', ['uses' => 'MainController@main', 'as' => 'main.index']);*/

/*Route::get('/', function ($names){
    return View('index')->with('names',$names);
});*/










Route::group(['middleware' => ['web']], function () {
    //
});



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::group(['middleware' => ['web', 'auth']], function(){
    Route::controllers(['home' => 'HomeController']);
});
