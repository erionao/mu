<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('login', ['as' => 'login', 'uses' => 'UserController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'UserController@login']);
Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@logout']);

Route::post('/send/mail', 'ContactController@sendMail');

Route::group(array('before' => 'auth'), function()
{

    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/blog', 'BlogController@blogView');


    /**
     * Cover
     */
    Route::get('/cover', 'CoverController@index'); 
    Route::post('/cover/{string}', 'CoverController@store');
    Route::post('/cover/{string}/{id}', 'CoverController@update');
    Route::get('/cover/delete/{id}', 'CoverController@destroy');


    /**
     * Gallery
     */
    Route::get('/gallery/images', 'GalleryController@index');
    Route::post('/gallery/add', 'GalleryController@store');
    Route::post('/gallery/edit/{id}', 'GalleryController@update');
    Route::get('/gallery/delete/{id}', 'GalleryController@destroy');


    /**
     * Gallery Category
     */
    Route::get('/gallery/category', 'GalleryCategoryController@index');
    Route::post('/gallery/category', 'GalleryCategoryController@store');
    Route::get('/gallery/category/delete/{id}', 'GalleryCategoryController@destroy');


    /**
     * User
     */

    Route::get('/users/lists', 'UserController@userLists');


    Route::get('/users', 'UserController@index');
    Route::get('/users/{id}', 'UserController@show');
    Route::post('/add/user', 'UserController@store');
    Route::post('/user/edit/{id}', 'UserController@update');
    Route::delete('/user/delete/{id}', 'UserController@destroy');

    /**
     * Pages
     */
    Route::get('pages', 'PagesController@index');
    Route::get('/section/{pageName}/{sectionName}', 'PagesController@section');
    Route::post('/section/{pageName}/{sectionName}', 'PagesController@sectionStore');
    Route::get('/get/pages', 'PagesController@getPages');




//    Route::get('/blog', 'BlogController@index');

    /**
     * Blog
     */
    Route::get('/blog/lists', 'BlogController@blogList');
    Route::get('/blog/add', 'BlogController@blogAdd');
    Route::get('/blog/details/{id}', 'BlogController@details');


    Route::get('/api/blogs', 'BlogController@index');

    Route::post('/update/blog/{id}', 'BlogController@updated');
    Route::post('/blog/save', 'BlogController@store');
    Route::delete('/api/blog/{id}', 'BlogController@destroy');
    Route::get('/blog/{id}', 'BlogController@show');
    Route::delete('/blog/image/{id}', 'BlogController@deleteImage');
    Route::post('/blog/image/add/{blogid}', 'BlogController@addImage');



    /**
     * Email
     */



    /**
     * Project
     */
//
    Route::get('/projects/add', 'ProjectController@add');
    Route::get('/projects/details/{id}', 'ProjectController@details');
    Route::get('/project/lists', 'ProjectController@projectList');


    Route::get('/projects/all', 'ProjectController@index');
    Route::post('/projects', 'ProjectController@store');
    Route::get('/projects/{id}', 'ProjectController@show');
    Route::get('/types/projects', 'ProjectController@indexTypes');
    Route::get('/project/image/{id}', 'ProjectController@deleteImage');
    Route::delete('/project/delete/{projectId}', 'ProjectController@destroy');
    Route::post('/project/image/add/{projectId}', 'ProjectController@addImage');

    /**
     * Background Route
     */
    Route::get('/background', 'BackgroundController@index');
    Route::get('/background/section/{sectionId}', 'BackgroundController@section');
    Route::post('/background/image/{sectionId}', 'BackgroundController@store');
    Route::delete('/background/delete/{id}', 'BackgroundController@destroy');

    /**
     * Job Route
     */

    Route::get('/job/add', 'JobController@jobAdd');
    Route::get('/job/details/{id}', 'JobController@jobDetails');
    Route::get('/job/lists', 'JobController@jobList');

    Route::get('/api/jobs', 'JobController@index');
    Route::get('/job/{id}', 'JobController@show');
    Route::post('/api/job', 'JobController@store');
    Route::post('/update/job/{id}', 'JobController@update');
    Route::delete('/api/job/{id}', 'JobController@destroy');






});


/**
 * Website Routes
 */
Route::get('/', 'WebController@home');
Route::get('/about', 'WebController@about');
Route::get('/apply', 'WebController@apply');
Route::get('/profiles', 'WebController@profiles');
Route::get('/contact', 'WebController@contact');

//Route::get('/history', 'WebController@history');
//Route::get('/career', 'WebController@career');
//Route::get('/news', 'WebController@news');


//Route::get('blog/{id}', 'BlogController@webShow');











/**
 * Admin Routes
 */

Route::get('/manjakos/sections', 'PagesController@sectionsManjakos');
Route::get('/manjakos/users', 'UserController@seedUser');
Route::get('/manjakos/projects/type', 'ProjectController@manjakosType');



