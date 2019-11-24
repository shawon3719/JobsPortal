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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
//Verify Route

Route::get('/token/{token}','Frontend\VerificationController@verify')->name('user.verification');

Route::get('/jobs', 'PagesController@jobs')->name('jobs');

//Company ROutes

Route::group(['prefix' => 'company'], function (){
    Route::get('/', 'CompanyPagesController@index')->name('company.index');
//    Route::get('/job/create', 'CompanyPagesController@job_create')->name('company.job.create');
});

//Job Routes

Route::group(['prefix' => 'job'], function (){
    Route::get('/', 'JobController@index')->name('job.index');
    Route::get('/create', 'JobController@create')->name('job.create');
    Route::get('/edit/{id}', 'JobController@edit')->name('job.edit');

    Route::post('/update/{id}', 'JobController@update')->name('job.update');
    Route::post('/delete/{id}', 'JobController@delete')->name('job.delete');
    Route::post('/store', 'JobController@store')->name('job.store');
});

//User Routes
Route::group(['prefix' => 'user'], function() {
    Route::get('/dashboard','UsersController@dashboard')->name('users.dashboard');
    Route::get('/profile','UsersController@profile')->name('user.profile');
    Route::post('/profile/update','UsersController@profileUpdate')->name('user.profile.update');
});

//Apply Routes
Route::group(['prefix' => 'apply'], function() {
    Route::post('/','Frontend\ApplyController@index')->name('apply');
    Route::post('/store','Frontend\ApplyController@store')->name('apply.store');
});



//Authentication Routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
