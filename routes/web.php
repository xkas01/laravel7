<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

/*Route::get('/salom/{ism}', function ($ism) {
    return "Hello $ism";
});*/

/*Route::get('/{jarayon}/{ism}', function ($jarayon, $ism) {
    if ($jarayon === 'salom') {
        return 'Salom, ' . $ism . '!';
    } else {
        return $jarayon . ', ' . $ism . '!';
    }
});*/

/*Route::get('/surov', function (Request $request) {
    return $request->get('ism', 'topilmadi');
});*/

/*Route::get('/avval/{ism?}', function ($ism = 1) {
    if (empty($ism))
        return 'ism topilmadi';
    return 'sizning ismingiz: ' . $ism;
});*/

/*Route::get('/surov', function (Request $request) {
    return $request->all();
});*/

/*Route::get('/index', function () {
    $news = [
        [
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'date' => '22:00 / 06.05.2020'
        ],
        [
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'date' => '22:00 / 06.05.2020'
        ],
        [
            'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'date' => '22:00 / 06.05.2020'
        ]
    ];
    return view('index')->with(['news' => $news]);
});*/

/*Route::get('/show', function () {
    return view('show');
});*/

Route::resource('news', 'NewsController');
