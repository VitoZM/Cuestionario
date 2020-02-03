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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/banco', function () {
    return view('banco');
});

Route::get('/crear', function () {
    return view('crear');
});

Route::get('/sections', function () {
    return view('sections');
});

Route::get('/cuestionario', function () {
    return view('cuestionario');
});

Route::get('/pregunta', function () {
    return view('pregunta');
});

Route::get('/pregunta/{initials}', function ($initials) {
    return view('pregunta')->with('initials',$initials);
});

Route::get('/gestionTest', function () {
    return view('gestionTest');
});

Route::get('/preguntaBanco', function () {
    return view('preguntaBanco');
});

Route::post('/authentication','ServerController@authentication');

Route::post('index.php/authenticate','ServerController@authenticate');

Route::post('close','ServerController@close');

Route::post('getSubjects','ServerController@getSubjects');

Route::post('/saveTest','ServerController@saveTest');

Route::post('/verify','ServerController@verify');
