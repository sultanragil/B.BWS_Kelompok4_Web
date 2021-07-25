<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/api/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function ($id) {

});

//Route::get('CommentController@index');
//Route::put('comment/{id}/update', 'CommentController@update');
//Route::post('comment', 'CommmentController@create');
//Route::delete('comment/{id}/delete', 'CommentController@delete');


$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function($api) {
    // All routes goes here
    $api->get('test', function() {
        return 1;
   });
    $api->group(['namespace' => 'App\Http\Controllers\Api'], function() use($api) {

        //Route Api Chapter
        $api->get('chapter','ApiChapterController@index');
        $api->get('chapter/{id}', 'ApiChapterController@show');
        $api->post('chapter', 'ApiChapterController@create');
        $api->put('chapter/{id}/update', 'ApiChapterController@update');
        $api->delete('chapter/{id}/delete', 'ApiChapterController@delete');

        //Route Api Comment
        $api->get('comment','ApiCommentController@index');
        $api->get('comment/{id}', 'ApiCommentController@show');
        $api->post('comment', 'ApiCommentController@create');
        $api->put('comment/{id}/update', 'ApiCommentController@update');
        $api->delete('comment/{id}/delete', 'ApiCommentController@delete');

        //Route Api User
        $api->get('user','ApiUserController@index');
        $api->get('user/{id}', 'ApiUserController@show');
        $api->post('user', 'ApiUserController@create');
        $api->put('user/{id}/update', 'ApiUserController@update');
        $api->delete('user/{id}/delete', 'ApiUserController@delete');

        //Route Api Genre
        $api->get('genre','ApiGenreController@index');
        $api->get('genre/{id}', 'ApiGenreController@show');
        $api->post('genre', 'ApiGenreController@create');
        $api->put('genre/{id}/update', 'ApiGenreController@update');
        $api->delete('genre/{id}/delete', 'ApiGenreController@delete');

        //Route Api Genre Title
        $api->get('gtitle','ApiGenreTitleController@index');
        $api->get('gtitle/{id}', 'ApiGenreTitleController@show');
        $api->post('gtitle', 'ApiGenreTitleController@create');
        $api->put('gtitle/{id}/update', 'ApiGenreTitleController@update');
        $api->delete('gtitle/{id}/delete', 'ApiGenreTitleController@delete');

        //Route Api Tag Title
        $api->get('ttitle','ApiTagTitleController@index');
        $api->get('ttitle/{id}', 'ApiTagTitleController@show');
        $api->post('ttitle', 'ApiTagTitleController@create');
        $api->put('ttitle/{id}/update', 'ApiTagTitleController@update');
        $api->delete('ttitle/{id}/delete', 'ApiTagTitleController@delete');

        //Route Api Reply
        $api->get('reply','ApiReplyController@index');
        $api->get('reply/{id}', 'ApiReplyController@show');
        $api->post('reply', 'ApiReplyController@create');
        $api->put('reply/{id}/update', 'ApiReplyController@update');
        $api->delete('reply/{id}/delete', 'ApiReplyController@delete');

        //Route Api Review
        $api->get('review','ApiReviewController@index');
        $api->get('review/{id}', 'ApiReviewController@show');
        $api->post('review', 'ApiReviewController@create');
        $api->put('review/{id}/update', 'ApiReviewController@update');
        $api->delete('review/{id}/delete', 'ApiReviewController@delete');

        //Route Api Title
        $api->get('title','ApiTitleController@index');
        $api->get('title/{id}', 'ApiTitleController@show');
        $api->post('title', 'ApiTitleController@create');
        $api->put('title/{id}/update', 'ApiTitleController@update');
        $api->delete('title/{id}/delete', 'ApiTitleController@delete');

        //Route Api Tag
        $api->get('tag','ApiTagController@index');
        $api->get('tag/{id}', 'ApiTagController@show');
        $api->post('tag', 'ApiTagController@create');
        $api->put('tag/{id}/update', 'ApiTagController@update');
        $api->delete('tag/{id}/delete', 'ApiTagController@delete');

        //Route Api Login Logout Logout All
        $api->post('/login', function(Request $request){
            $data = $request->validate([
                'email'	=> 'required',
                'password' => 'required'
            ]);

            $user = App\User::where('email', $request->email)->first();

            if (! $user || !Hash::check($request->password, $user->password)) {
                return response([
                    'email' => ['The provided credentials are incorrect.'],
                ], 404);
            }

            return $user->createToken('my-token')->plainTextToken;

        });

        $api->post('/logout', function(Request $request){

            $user = $request->user();
            $user->currentAccessToken()->delete();
            $respon = [
                'status' => 'success',
                'msg' => 'Logout successfully',
                'errors' => null,
                'content' => null,
                ];
                return response()->json($respon, 200);
        });

        $api->post('/logoutall', function(Request $request) {
            $user = $request->user();
            $user->tokens()->delete();
            $respon = [
                'status' => 'success',
                'msg' => 'Logout successfully',
                'errors' => null,
                'content' => null,
            ];
            return response()->json($respon, 200);
        });
    });
});
