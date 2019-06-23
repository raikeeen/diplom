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
Route::get('/', 'newsController@main')->name('main');

Route::get('/news', 'newsController@index')->name('news');
Route::get('/news/{id}', 'newsController@detail')->name('news-detail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'tasksController@index')->name('tasks');
Route::get('/users/{id}', 'usersController@index')->name('users');

Route::get('/tasks/{id}', 'tasksController@detail')->name('tasks-detail');
Route::post('/tasks/{id}', 'tasksController@apply')->name('tasks-detail-apply');

Route::get('/createTask', 'tasksController@indexAdd')->name('add-task-get');
Route::post('/createTask', 'tasksController@add')->name('add-task-post');





Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
