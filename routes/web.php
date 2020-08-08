<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/discuss', function () {
//     return view('discuss');
// });

Auth::routes();

Route::get('/Forum', 'ForumController@show')->name('forum');

Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('channels', 'ChannelsController');

    Route::get('discussions/create', 'DiscussionController@create')->name('discussion.create');

    Route::post('discussions/store', 'DiscussionController@store')->name('discussion.store');

    Route::get('discussions/{slug}', 'DiscussionController@show')->name('discussion');

    Route::post('discussions/reply/{id}', 'DiscussionController@reply')->name('dicussion.reply');
    
});
 