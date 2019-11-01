<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');
});
Route::post('getmonthreturn', 'API\UserController@getfinalandtotalmr');

Route::post('reportPageOne', 'API\UserController@report_one_Page');

Route::post('sum', 'API\UserController@sum');


//report page api starts 
Route::post('bestfittree', 'API\ReportController@bestfittree');

//report page api ends 

//report2 page api starts 
Route::post('step1', 'API\Report2Controller@step1');
Route::post('step2', 'API\Report2Controller@step2');
Route::post('best_tree', 'API\Report2Controller@Best_tree_data_report_two');
Route::post('step_6', 'API\Report2Controller@step_6');

//report2 page api ends 

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::post('/api_control','ApiController@abc');