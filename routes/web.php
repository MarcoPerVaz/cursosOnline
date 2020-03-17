<?php

/*  */
use Intervention\Image\Facades\Image;
/*  */

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

/* Ruta Lenguaje */
Route::get('/set_language({lang}', 'Controller@setLanguage')->name('set_language');
/* Rutas Socialite */
Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

/* Grupos de rutas de Cursos */
Route::group(['prefix' => 'courses'], function() {
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/suscribed', 'CourseController@suscribed')->name('courses.suscribed');
        Route::get('/{course}/inscribe', 'CourseController@inscribe')->name('courses.inscribe');
        Route::post('/add_review', 'CourseController@addReview')->name('courses.add_review');
    });
    Route::get('/{course}', 'CourseController@show')->name('courses.detail');
});

/* Rutas que solo se pueden usar si se está logueado */
Route::group(['middleware' => ['auth']], function() {
    /* Grupo de rutas de Suscripciones */
    Route::group(["prefix" => "subscriptions"], function() {
        Route::get('/plans', 'SubscriptionController@plans')
             ->name('subscriptions.plans');
        Route::get('/admin', 'SubscriptionController@admin')
             ->name('subscriptions.admin');
        Route::post('/process_subscription', 'SubscriptionController@processSubscription')
             ->name('subscriptions.process_subscription');
        Route::post('/resume', 'SubscriptionController@resume')->name('subscriptions.resume');
        Route::post('/cancel', 'SubscriptionController@cancel')->name('subscriptions.cancel');
    });

    /*  */
    Route::group(['prefix' => 'invoices'], function() {
        Route::get('/admin', 'InvoiceController@admin')->name('invoices.admin');
        Route::get('/{invoice}/download', 'InvoiceController@download')->name('invoices.download');
    });
});

/*  */
Route::get('/images/{path}/{attachment}', function($path, $attachment){
    $file = sprintf('storage/%s/%s', $path, $attachment);
    if (File::exists($file)) {
        return Image::make($file)->response();
    }
});

Route::group(['prefix' => "profile", 'middleware' => ['auth']], function() {
    Route::get('/', 'ProfileController@index')->name('profile.index');
});

/*  */