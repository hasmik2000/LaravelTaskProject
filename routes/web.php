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
use App\Http\Middleware\checkAge;

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {

    Route::resource('profile', 'ProfileController');

    Route::post('/profile/{id}/comments', 'CommentsController@store');

    Route::get('/tasks/categories/{category}', 'CategoriesController@index');

    Route::get('/tasks/country/{country}', 'CountryController@index');

    Route::get('/tasks/country/user/{user}', 'UserController@index');

    Route::get('/tasks', 'TasksController@index')->middleware(checkAge::class);

    Route::get('tasks/paginate', 'PaginationController@index');

    Route::get('notify/index', 'NotificationController@index');
});

Route::get('login/{social}', 'Auth\LoginController@redirectToProvider')->where('social', 'facebook|google');

Route::get('login/{social}/callback', 'Auth\LoginController@handleProviderCallback')->where('social', 'facebook|google');

Route::get('/foo', function () {
    Artisan::queue('email:send');
});