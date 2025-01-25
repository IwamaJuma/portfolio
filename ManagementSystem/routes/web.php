<?php

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

Route::get('/', function () {
    return view('welcome');
});


//作業報告の一覧・作成・登録完了
Route::get('working_reports','WorkingReportsController@index');
Route::get('working_reports/create','WorkingReportsController@create');
Route::post('working_reports/store','WorkingReportsController@store');

//従業員一覧・詳細
Route::get('employees','EmployeesController@index');
Route::get('employees/detail','EmployeesController@show');
