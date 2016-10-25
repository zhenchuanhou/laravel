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

Route::get('test1', 'TestController@test1');

Route::get('query1', 'TestController@query1');
Route::get('query2', 'TestController@query2');
Route::get('query3', 'TestController@query3');
Route::get('query4', 'TestController@query4');
Route::get('query5', 'TestController@query5');
Route::get('orm1', 'TestController@orm1');
Route::get('orm2', 'TestController@orm2');
Route::get('orm3', 'TestController@orm3');
Route::get('orm4', 'TestController@orm4');
Route::get('section1', 'TestController@section1');
Route::get('urlTest', ['as'=>'url', 'uses'=>'TestController@urlTest']);
Route::get('test/request1', ['uses'=>'TestController@request1']);
Route::get('test/request1', ['uses'=>'TestController@request1']);
Route::get('test/request1', ['uses'=>'TestController@request1']);

Route::get('session1', ['uses'=>'TestController@session1']);
Route::get('session2', [
    'as'=>'session2',
    'uses'=>'TestController@session2'
]);

Route::get('response', ['uses'=>'TestController@response']);

Route::get('activity0', ['uses'=>'TestController@activity0']);

Route::group(['middleware'=>['activity']], function(){
    Route::get('activity1', ['uses'=>'TestController@activity1']);
    Route::get('activity2', ['uses'=>'TestController@activity2']);
});

Route::get('student/index', ['uses' => 'StudentController@index']);
Route::any('student/create', ['uses' => 'StudentController@create']);
Route::any('student/save', ['uses' => 'StudentController@save']);
Route::any('student/update/{id}', ['uses' => 'StudentController@update']);
Route::any('student/detail/{id}', ['uses' => 'StudentController@detail']);
Route::any('student/delete/{id}', ['uses' => 'StudentController@delete']);

