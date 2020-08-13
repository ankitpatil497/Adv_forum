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

Auth::routes(['verify'=>true]);
Route::group(['middleware' => ['verified']], function () {


    Route::get('/Forum', 'ForumController@show')->name('forum');

    Route::get('channel/{slug}','ForumController@chanel')->name('channel');

    Route::get('discussions/{slug}', 'DiscussionController@show')->name('discussion');
    
});



Route::group(['middleware' => ['auth']], function () {
    
    Route::resource('channels', 'ChannelsController');

    Route::get('discussions/create/new', 'DiscussionController@create')->name('discussion.create');

    Route::post('discussions/store', 'DiscussionController@store')->name('discussion.store');


    Route::post('discussions/reply/{id}', 'RepliesController@reply')->name('dicussion.reply');

    Route::get('discussion/best/reply/{id}','DiscussionController@best_answer')->name('discussion.best_answer');

    Route::get('reply/like/{id}','LikesController@likes')->name('reply.like');

    Route::get('reply/unlike/{id}','LikesController@unlikes')->name('reply.unlike');

    Route::get('discussion/watch/{id}','WatchersController@watch')->name('dicussion.watch');

    Route::get('discussion/unwatch/{id}','WatchersController@unwatch')->name('dicussion.unwatch');
    
    Route::get('discussion/edit/{slug}','DiscussionController@edit')->name('discussion.edit');

    Route::post('discussiom/update/{id}','DiscussionController@update')->name('discussion.update');

    Route::get('reply/edit/{id}','RepliesController@edit')->name('reply.edit');

    Route::post('reply/update/{id}','RepliesController@update')->name('reply.update');
});
 