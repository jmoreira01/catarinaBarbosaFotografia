<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

Route::get('/', 'WelcomeController@index');
Route::post('/testimonals', 'TestimonalController@store');
Route::get('/gallery/{service}', 'GalleryController@index');

Auth::routes();

// Auth Middleware

Route::group(['middleware' => ['auth', 'ValidationSession']], function () {


    Route::get('/home', 'HomeController@index')->name('home');


// Empresa
    Route::get('/organizations', 'OrganizationController@index');
    Route::get('/organizations/create', 'OrganizationController@create');
    Route::post('/organizations', 'OrganizationController@store');
    Route::get('/organizations/{organization}', 'OrganizationController@show');
    Route::get('/organizations/{organization}/edit', 'OrganizationController@edit');
    Route::put('/organizations/{organization}', 'OrganizationController@update');
    Route::delete('/organizations/{organization}', 'OrganizationController@destroy');


// Servicos
    Route::get('/services', 'ServiceController@index');
    Route::get('/services/create', 'ServiceController@create');
    Route::post('/services', 'ServiceController@store');
    Route::get('/services/{service}', 'ServiceController@show');
    Route::get('/services/{service}/edit', 'ServiceController@edit');
    Route::put('/services/{service}', 'ServiceController@update');
    Route::delete('/services/{service}', 'ServiceController@destroy');

// Acessos
    Route::get('/accesses', 'AccessController@index');
    Route::get('/accesses/create', 'AccessController@create');
    Route::post('/accesses', 'AccessController@store');
    Route::get('/accesses/{access}', 'AccessController@show');
    Route::get('/accesses/{access}/edit', 'AccessController@edit');
    Route::put('/accesses/{access}', 'AccessController@update');
    Route::delete('/accesses/{access}', 'AccessController@destroy');

// Imagens
    Route::get('/images', 'ImageController@index');
    Route::get('/images/create', 'ImageController@create');
    Route::post('/images', 'ImageController@store');
    Route::get('/images/{image}/show', 'ImageController@show');
    Route::get('/images/{image}/edit', 'ImageController@edit');
    Route::put('/images/{image}', 'ImageController@update');
    Route::delete('/images/{image}', 'ImageController@destroy');

// Videos
    Route::get('/videos', 'VideoController@index');
    Route::get('/videos/create', 'VideoController@create');
    Route::post('/videos', 'VideoController@store');
    Route::get('/videos/{video}', 'VideoController@show');
    Route::get('/videos/{video}/edit', 'VideoController@edit');
    Route::put('/videos/{video}', 'VideoController@update');
    Route::delete('/videos/{video}', 'VideoController@destroy');

// Testimonals
    Route::get('/testimonals', 'TestimonalController@index');
    Route::get('/testimonals/create', 'TestimonalController@create');

    Route::get('/testimonals/{testimonal}', 'TestimonalController@show');
    Route::get('/testimonals/{testimonal}/edit', 'TestimonalController@edit');
    Route::put('/testimonals/{testimonal}', 'TestimonalController@update');
    Route::delete('/testimonals/{testimonal}', 'TestimonalController@destroy');
//

});

