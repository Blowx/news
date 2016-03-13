<?php
<<<<<<< HEAD
//тестовые роуты
/*Route::get('/{name}', ['uses' => 'TestController@index', 'as' => 'test.index']);
Route::get('/', ['uses' => 'MainController@main', 'as' => 'main.index']);*/
Route::get('/', ['uses'=> 'IndexController@index', 'as' => 'main.index']); //



// с регул€ркой
=======

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|\

php artisan make comtroller


*/





Route::get('/{name}', ['uses' => 'TestController@index', 'as' => 'test.index']);

Route::get('/', ['uses' => 'MainController@main', 'as' => 'main.index']);

/*Route::get('/', function ($names){
    return View('index')->with('names',$names);
});*/








>>>>>>> ae0b26ae641e4469281561644bba64bd66d63392
/*Route::get('foo/{n}', function ($n){
    return "hello $n";
})->where(
    [
        'n' =>'[a-zA-Z]'
    ]
);*/

<<<<<<< HEAD



Route::group(['middleware' => ['web']], function () {
    //
});
=======
Route::group(['middleware' => ['web']], function () {
    //
});
>>>>>>> ae0b26ae641e4469281561644bba64bd66d63392
