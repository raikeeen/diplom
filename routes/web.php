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
Route::get('/personal', 'usersController@personalIndex')->name('users-personal-index');
Route::post('/personal', 'usersController@personalEdit')->name('users-personal-edit');

Route::get('/personal/activeTask', 'tasksController@my')->name('tasks-my');
Route::get('/personal/workTask', 'tasksController@myWork')->name('tasks-my-work');
Route::get('/personal/closeTask', 'tasksController@myClose')->name('tasks-my-close');

Route::get('/personal/response/{id}', 'tasksController@response')->name('tasks-my-response');
Route::get('/personal/response/select/{id}', 'tasksController@responseSelect')->name('tasks-my-response-select');
Route::post('/personal/response/select/{id}', 'tasksController@responseSelectPost')->name('tasks-my-response-select-post');
Route::get('/personal/response/dialog/{id}', 'tasksController@responseDialog')->name('tasks-my-response-dialog');
Route::post('/personal/response/dialog/{id}', 'tasksController@responseDialogPost')->name('tasks-my-response-dialog-messages');

Route::get('/personal/response/review/{id}', 'tasksController@review')->name('tasks-my-review');
Route::post('/personal/response/review/{id}', 'tasksController@reviewPost')->name('tasks-my-review-post');



Route::post('/personal/response/{id}', 'tasksController@responsePost')->name('tasks-my-response-post');



Route::get('/tasks/{id}', 'tasksController@detail')->name('tasks-detail');
Route::get('/tasks/{id}/dialog', 'tasksController@dialog')->name('tasks-dialog');

Route::post('/tasks/{id}', 'tasksController@apply')->name('tasks-detail-apply');

Route::get('/createTask', 'tasksController@indexAdd')->name('add-task-get');
Route::post('/createTask', 'tasksController@add')->name('add-task-post');


Route::get('/support', 'supportController@index')->name('support');
Route::post('/support', 'supportController@post')->name('support-post');
Route::get('/admin', 'adminController@index')->name('admin');




Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/admin', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
Route::group(['prefix' => 'manage', 'middleware' => ['role:manage']], function() {
    Route::get('/', 'AdminController@welcome');
    Route::get('/admin', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
