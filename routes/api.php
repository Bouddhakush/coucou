<?php


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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/



//Artistes
Route::get('/artistes', 'ArtisteController@index');
Route::get('/artistes/{id_artiste}', 'ArtisteController@show');
Route::post('/artistes', 'ArtisteController@create');
Route::post('/artistes/{id_artiste}', 'ArtisteController@update');
Route::delete('/artistes/{id_artiste}', 'ArtisteController@delete');

//Labels