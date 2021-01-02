<?php

use App\Models\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/user',function()  
{  
  return Users::find(1)->task;  
}); 




Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $user_data = Users::pluck('name')->all();
    //dd($user_data);
    return view('task',compact('user_data'));

});

//// new user data insertion
Route::post('/submit','App\Http\Controllers\UserController@createUser');

//// Assigning task data insertion
Route::post('/submit-task','App\Http\Controllers\TaskController@createTask');

//// Eporting Data
Route::get('/export','App\Http\Controllers\ExportDataController@export');