<?php
/*Route::get('/{name}', ['uses' => 'TestController@index', 'as' => 'test.index']);*/
//Route::get('/', ['uses' => 'MainController@main', 'as' => 'main.index']);
//Route::get('/', ['uses'=> 'IndexController@index', 'as' => 'main.index']); //
//Route::get('/db', ['uses' =>'DbController@index']);







/*Route::get('/{name}', ['uses' => 'TestController@index', 'as' => 'test.index']);

Route::get('/', ['uses' => 'MainController@main', 'as' => 'main.index']);*/

/*Route::get('/', function ($names){
    return View('index')->with('names',$names);
});*/










/*Route::group(['middleware' => ['web']], function () {
    //
});*/



Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', ['uses' => 'HomeController@index']);
    Route::get('/form', ['uses' => 'HomeController@form']);
    Route::get('/article/{id}', ['uses' => 'ArticleController@index']);
    Route::get('{article}/edit', ['uses' => 'ArticleController@edit', 'as' => 'article.edit']);
    Route::put('{article}/update', ['uses' => 'ArticleController@update', 'as' => 'article.update']);

});

Route::group(['middleware' => ['web', 'auth']], function(){
    Route::controllers(['/' => 'HomeController']);
});
