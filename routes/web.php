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

        Route::group(['middleware' => [sprintf('role:%s', \App\Role::TEACHER)]], function() {
            Route::resource('courses', 'CourseController');
        });
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
    Route::put('/', 'ProfileController@update')->name('profile.update');
});

    /* Rutas Solicitude */
    Route::group(['prefix' => "solicitude"], function () {
        Route::post('/teacher', 'SolicitudeController@teacher')->name('solicitude.teacher');
    });

    /* Rutas Teacher */
    Route::group(['prefix' => "teacher", 'middleware' => ['auth']], function () {
        Route::get('/courses', 'TeacherController@courses')->name('teacher.courses');
        Route::get('/students', 'TeacherController@students')->name('teacher.students');
        Route::post('/send_message_to_student', 'TeacherController@sendMessageToStudent')->name('teacher.send_message_to_student');
    });

    /* Rutas Admin */
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', sprintf('role:%s', \App\Role::ADMIN)]], function() {
        Route::get('/courses', 'AdminController@courses')->name('admin.courses');
        Route::get('/courses_json', 'AdminController@coursesJson')->name('admin.courses_json');
        Route::post('/courses/updateStatus', 'AdminController@updateCourseStatus');

        Route::get('/students', 'AdminController@students')->name('admin.students');
        Route::get('/students_json', 'AdminController@studentsJson')->name('admin.students_json');

        Route::get('/teachers', 'AdminController@teachers')->name('admin.teachers');
        Route::get('/teachers_json', 'AdminController@teachersJson')->name('admin.teachers_json');
    });

/*  */

/* Notas:
    *role:%s significa que el middleware role acepta un parámetro y usando la función sprintf() se le pasa como parámetro
     \App\Role::TEACHER
*/