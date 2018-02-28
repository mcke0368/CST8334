<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', 'GuideController@khalid');
Route::post('/signin', 'LoginController@login');

Route::post('/signup', 'LoginController@signup');

Route::post('updateProfile', 'LoginController@updateProfile');

Route::post('updateCerts', 'LoginController@updateCerts');

Route::get('/', function () {
    return view('homepage');
});

Route::get('homepage', function () {
    return view('homepage');
});

/** Christian starts **/
Route::get('/profile', 'LoginController@getGuide');

Route::get('/profile/edit', 'LoginController@editGuide');
/** Christian ends **/


/** Nadia  starts **/
Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/confirmation', function () {
    return view('confirmaton');
});
/** Nadia ends **/


/** Lilian starts **/
Route::get('/jobDetails', function () {
    return view('jobDetails');
});

Route::get('/guideDashboard', function () {
    return view('guideDashboard');
});

Route::get('/manageAccount', function () {
    return view('manageAccount');
});
/** Lilian ends **/

/** Ki Beom starts **/

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/saveType', 'LogbookTypeController@saveType');

Route::get('contact', function()
{
    return view('contact');
});

Route::get('companyContact', function()
{
    return view('companyContact');
});

Route::get('logbook', 'LogbookListController@passLogbookData');

Route::post('/saveLog', 'LogbookController@saveLog');

Route::post('/setLog', 'LogbookController@setLog');

Route::get('defaultLog', 'LogbookController@showLog');

Route::post('/setLogType', 'LogbookController@setLogType');

Route::get('createDefaultLogbook', 'LogbookController@showLogTemplate');

Route::get('createLogType', 'LogbookTypeController@showTemplate');

Route::post('/deleteLogType', 'LogbookListController@deleteLogType');

Route::post('/deleteLog', 'LogbookListController@deleteLog');

Route::get('/deleteLogType', function()
{
    return view('logbook');
});

Route::get('/deleteLogType', function()
{
    return view('logbook');
});
//joanna add this for test
Route::get('logbookMainPage', function()
{
    return view('logbookMainPage');
});

Route::get('kayakLookbook', function()
{
    return view('kayakLookbook');
});
Route::get('rockClimbingLogbook', function()
{
    return view('rockClimbingLogbook');
});
Route::get('companyLogin', function()
{
    return view('companyLogin');
});

/** Ki Beom ends **/


/** setup the defaul laravel auth routes */

//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');
$this->get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index')->name('home');

/** routes for homepage redirect from auth */
Route::get('/home', 'HomeController@index')->name('home');

