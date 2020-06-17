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

Route::get('/', 'PublicController@showHome');

Route::group(['prefix' => 'register'], function () {
    Route::post('software-fair', 'PublicController@createSoftwareFairParticipant');
    Route::post('hardware-fair', 'PublicController@createHardwareFairParticipant');
    Route::post('open-talk', 'PublicController@createOpenTalkParticipant');
});

Auth::routes();
Route::get('/logout', 'HomeController@logout');

///admin route
Route::group(['prefix' => 'admin', 'middleware' => ['auth','admin']], function () {
    Route::get('/', 'AdminController@home');
    Route::get('/profile', 'AdminController@showProfile');
    Route::get('/guidelines', 'AdminController@showGuidelines');
    Route::get('/visitor-statistic', 'AdminController@showStatisticVisitor');
    Route::get('/developer-statistic', 'AdminController@showStatisticDeveloper');
    Route::get('/developer-score-statistic', 'AdminController@showStatisticScoreDeveloper');
    ///fun reward
    Route::group(['prefix' => 'FunReward'], function () {
        Route::get('/LuckyPong', 'AdminController@showPong');
        Route::post('/LuckyPong', 'AdminController@pong');
        Route::get('/GetSticker', 'AdminController@showSticker');
        Route::post('/GetSticker', 'AdminController@sticker');
    });
    ///point challenge
    Route::group(['prefix' => 'PointChallenge'], function () {
        Route::get('/Ui-Ux', 'AdminController@showGameUi');
        Route::get('/Follow-IG', 'AdminController@showIG');
        Route::get('/Photobooth', 'AdminController@showPhotobooth');
        // Route::get('/SingASong', 'AdminController@showSing');
        
        Route::post('/Ui-Ux', 'AdminController@gameUi');
        Route::post('/Follow-IG', 'AdminController@ig');
        Route::post('/Photobooth', 'AdminController@photobooth');
        // Route::post('/SingASong', 'AdminController@sing');
    });
    
});

///developer route
Route::group(['prefix' => 'developer', 'middleware' => ['auth','developer']], function () {
    Route::get('/', 'DeveloperController@visitorInput');
    Route::get('/profile', 'DeveloperController@showProfile');
    Route::get('/guidelines', 'DeveloperController@showGuidelines');
    Route::get('/rate', 'DeveloperController@showScoring');
    Route::post('/rate/{visitor_id}', 'DeveloperController@scoring');
});

///visitor route
Route::group(['prefix' => 'visitor', 'middleware' => ['auth','visitor']], function () {
    Route::get('/', 'VisitorController@home');
    Route::get('/profile', 'VisitorController@showProfile');
    Route::get('/guidelines', 'VisitorController@showGuidelines');
    Route::get('/rate/{participant_id}', 'VisitorController@showScoring');
    Route::post('/rate/{participant_id}', 'VisitorController@scoring');
});

///admin route
///get final_score & statistik developer

Route::get('/home', 'HomeController@index')->name('home');
