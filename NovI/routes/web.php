<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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




Route::group(['namespace'=>'Backend'], function () {
    Route::prefix('dashboard')->group(function () {
        Route::resource('/', 'IndexController');
        Route::resource('user', 'UserController');
        Route::resource('title', 'TitleController');
        Route::resource('chapter', 'ChapterController');
        Route::resource('genre', 'GenreController');
        Route::resource('tag', 'TagController');
        Route::resource('title', 'TitleController');
        Route::resource('titleg', 'TitleGenreController');
        Route::resource('titlet', 'TitleTagController');
        Route::resource('creator', 'CreatorController');
        Route::resource('carousel', 'CarouselController');
    });
});

Route::group(['namespace'=>'Frontend'], function () {
    Route::resource('ftitle', 'FtitleController');
    Route::resource('lpage', 'LpageController');
    Route::resource('ulogin', 'UloginController');
    Route::resource('sfinder', 'SfinderController');
    Route::resource('profu', 'UprofileController');
    Route::resource('lauth', 'PauthorController');
    Route::resource('ltitle', 'PtitleController');
    Route::resource('lgenre', 'PgenreController');
    Route::resource('ltag', 'PtagController');
    Route::resource('bmark', 'BookmarkController');
    Route::resource('gdesc', 'GdescController');
    Route::resource('tdesc', 'TdescController');
    Route::resource('addc', 'AddchapterController');
    Route::get('/ad-chapter/{id}','AddchapterController@create');
    Route::get('/chapter/edit/{id}','AddchapterController@edit');
    Route::post('/chapter/update/{id}','AddchapterController@update');
    Route::resource('utitle', 'UtitleController');
    Route::resource('fchapter', 'FchapterController');
    Route::resource('adesc', 'AdescController');
    Route::get('/ltitle', 'PtitleController@index')->name('ltitle.index');
    Route::get('query', 'SfinderController@show');
    Route::resource('addgen', 'GenreTitleController');
    Route::resource('addtag', 'TagTitleController');
    Route::get('/', 'LpageController@index');


});
// Route::resource('posts', PostCRUDController::class);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('ftitle/{id}', 'FtitleController@displayDetail')->name('displayDetail');
Route::get('/upload', 'UploadController@index');
Route::post('/upload/proses', 'UploadController@store');


// Route::get('gdesc/{id}', 'GdescController@index');
// Route::get('tdesc/{id}', 'TdescController@index');
// Route::get('ftitle/{id}', 'App\Http\Controllers\Frontend\FtitleController@index');




