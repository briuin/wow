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
    return view('test');
});

/*Route::match(['get', 'post'], '/', function () {
    return 'Hello World';
});*/

Route::any('foo', function () {
    return 'Hello World';
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{id}', ['as' => 'posts.show', function()
{
    //
}]);

Route::get('hello/{name?}', function($name = 'John'){
   return 'My name is '.$name;
})
->where('name','[a-z]+');

Route::group(['prefix' => 'admin'], function () {
    Route::get('users', function ()    {
        // Matches The "/admin/users" URL
    });
});

/*Route::get('user/profile', [
    'as' => 'profile', 'uses' => 'UserController@showProfile'
]);*/