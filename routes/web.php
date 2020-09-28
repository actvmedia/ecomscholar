<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->middleware('guest');

Route::get('about', function () {
    return view('about');
})->middleware('guest');

Route::get('mentorship', function () {
    return view('mentorship');
})->middleware('guest');

Route::get('results', function () {
    return view('results');
})->middleware('guest');

Auth::routes();

Route::get('logout', function () {
  Auth::logout();
  return redirect('/login');
})->middleware('auth');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/courses', 'CoursesController2@show')->name('showCourses')->middleware('auth');

Route::get('/courses/add', 'CoursesController2@showAdd')->middleware('auth');

Route::post('/courses/add', 'CoursesController2@postAdd')->name('addCourse')->middleware('auth');

Route::get('/courses/edit/{id}', 'CoursesController2@showEdit')->middleware('auth');

Route::post('/courses/edit', 'CoursesController2@postEdit')->name('editCourse');

Route::get('/courses/delete/{id}', 'CoursesController2@delete')->middleware('auth');

Route::get('/courses/view/{id}', 'CoursesController2@view')->name('viewCourse')->middleware('auth');

Route::get('/videos', 'VideosController@show')->name('showVideos')->middleware('auth');

Route::get('/videos/add', 'VideosController@showAdd')->middleware('auth');

Route::post('/videos/add', 'VideosController@postAdd')->name('addVideo')->middleware('auth');

Route::get('/videos/edit/{id}', 'VideosController@showEdit')->middleware('auth');;

Route::post('/videos/edit', 'VideosController@postEdit')->name('editVideo')->middleware('auth');

Route::get('/videos/delete/{id}', 'VideosController@delete')->middleware('auth');

Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $result = Response::make($file, 200);
    $result->header("Content-Type", $type);

    return $result;
});

Route::get('/users', 'UsersController@show')->name('showUsers')->middleware('auth');

Route::get('/users/edit/{id}', 'UsersController@showEdit')->middleware('auth')->middleware('auth');;

Route::post('/users/edit', 'UsersController@postEdit')->name('editUser')->middleware('auth');;

Route::get('/users/delete/', 'UsersController@delete')->middleware('auth');
