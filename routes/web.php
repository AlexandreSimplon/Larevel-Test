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

// Route::get('/welcome', function () {
//     $Prenom =   'Alexandre';
//     $Nom    =   'DOUCHET';
//     return view('welcome', compact('Prenom','Nom'));
// });

// Route::get('/page2', function () {
//     return view('pages/pageSecondaire');
// });

// Route::get('/page3', function () {
//     return view('pages/pageTrois');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');

Route::get('/inscription', function () {
    return view('/inscription');
});
