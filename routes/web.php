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
use App\Paper;
use App\Group;
use App\App;
use App\History;


Route::get('/', function () {
    return view('welcome', [ 'papers'=> Paper::all()]);
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/artigos', function () {
    return view('artigos', [ 'papers'=> Paper::all()]);
});

Route::get('/precisadeajuda', function () {
    return view('precisadeajuda', [ 'groups'=> Group::all()]);
});

Route::get('/appajuda', function () {
    return view('appajuda', [ 'app'=> App::all()]);
});

Route::get('/sofroviolencia', function () {
    return view('saibasevocesofreviolencia', [ 'app'=> App::all()]);
});

Route::get('/textoartigo/{id}', function ($id) {
    $paper = Paper::find($id);
    return view('textoartigo', compact('paper'));
});

Route::get('/historia', function () {
    return view('historia', [ 'history'=> History::all()]);
});

Route::get('/textohistory/{id}', function ($id) {
    $histy = History::find($id);
    return view('textohistory', compact('histy'));
});
