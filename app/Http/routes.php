<?php
/*Route::get('/{name}', ['uses' => 'TestController@index', 'as' => 'test.index']);
Route::get('/', ['uses' => 'MainController@main', 'as' => 'main.index']);*/
Route::get('/', ['uses'=> 'IndexController@index', 'as' => 'main.index']); //







/*Route::get('/{name}', ['uses' => 'TestController@index', 'as' => 'test.index']);

Route::get('/', ['uses' => 'MainController@main', 'as' => 'main.index']);*/

/*Route::get('/', function ($names){
    return View('index')->with('names',$names);
});*/










Route::group(['middleware' => ['web']], function () {
    //
});


