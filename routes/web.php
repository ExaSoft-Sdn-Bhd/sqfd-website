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
    return view('welcome');
});

/*--------------------------------------------------------------
# EVENT x11
--------------------------------------------------------------*/
Route::get('examedia-gallery-2011-exa-office', function () {
    return view('pages/event/2011-exa-office');
});

Route::get('examedia-gallery-2014-exa-office', function () {
    return view('pages/event/2014-exa-office');
});

Route::get('examedia-gallery-2015-exa-raya', function () {
    return view('pages/event/2015-exa-raya');
});

Route::get('examedia-gallery-2015-exa-trip-langkawi', function () {
    return view('pages/event/2015-exa-trip-langkawi');
});

Route::get('examedia-gallery-2016-exa-raya', function () {
    return view('pages/event/2016-exa-raya');
});

Route::get('examedia-gallery-2018-exa-enstek-team', function () {
    return view('pages/event/2018-exa-enstek');
});

Route::get('examedia-gallery-2019-exa-raya', function () {
    return view('pages/event/2019-exa-raya');
});

Route::get('examedia-gallery-2019-exa-sales-kick-off', function () {
    return view('pages/event/2019-exa-sales-ko');
});

Route::get('examedia-gallery-2020-exa-race', function () {
    return view('pages/event/2020-exa-race');
});

Route::get('examedia-gallery-2020-exa-sales-kick-off', function () {
    return view('pages/event/2020-exa-sales-ko');
});

Route::get('examedia-gallery-2022-exa-raya', function () {
    return view('pages/event/2022-exa-raya');
});

