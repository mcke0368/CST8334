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

Route::get('/', function () {
    return view('homepage');
});

Route::get('homepage', function () {
    return view('homepage');
});

/** Christian starts **/

/** Christian ends **/




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

Route::post('/saveType', 'LogbookTypeController@saveType');

Route::get('contact', function()
{
    return view('contact');
});

Route::get('companyContact', function()
{
    return view('companyContact');
});


/**********************************************************************************
* Logs and Logbooks
**********************************************************************************/

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

/**********************************************************************************
* Profile Controller
**********************************************************************************/

Route::post('/ajaxUpdateProfile', 'GuideProfileController@ajaxUpdateProfile')->name('ajaxUpdateProfile');
Route::post('/ajaxUpdateCerts', 'GuideProfileController@ajaxUpdateCerts')->name('ajaxUpdateCerts');
Route::get('/profile', 'GuideProfileController@getGuide')->name('profile');
Route::get('/profile/edit', 'GuideProfileController@editGuide')->name('profile_edit');

/**********************************************************************************
* Login Controller  and Authentication
**********************************************************************************/
/* GET request for login should go the the joined login/register page called 'login'
   The commented out GET is for going to the Laravel login page in the Auth namespace */
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/login', function () { return view('login'); });
Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
/* TODO - remove the get route for logout.  It's only here for debugging because if something
   goes wrong you cannot logout easily via post request. */
//Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/* Registration Routes...
   NOTE - we're not using the GET as it points to the single register page in Auth namespace */
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

