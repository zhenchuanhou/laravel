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
    return view('welcome');
});

//Route::get('member/info', 'MemberController@info');
//Route::get('member/info', ['uses' => 'MemberController@info']);

//Route::any('member/info', [
//    'uses' => 'MemberController@info',
//    'as' => 'memberinfo'
//]);

Route::any('member/{id}', ['uses' => 'MemberController@info'])
    ->where('id', '[0-9]+');

Route::get('test1', 'StudentController@test1');

Route::get('query1', 'StudentController@query1');
Route::get('query2', 'StudentController@query2');
Route::get('query3', 'StudentController@query3');
Route::get('query4', 'StudentController@query4');
Route::get('query5', 'StudentController@query5');
Route::get('orm1', 'StudentController@orm1');
Route::get('orm2', 'StudentController@orm2');
Route::get('orm3', 'StudentController@orm3');
Route::get('orm4', 'StudentController@orm4');
Route::get('section1', 'StudentController@section1');
Route::get('urlTest', ['as'=>'url', 'uses'=>'StudentController@urlTest']);

