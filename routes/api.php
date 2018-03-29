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
Route::get('/labels', 'LabelController@index');
Route::get('/labels/{id_label}', 'LabelController@show');
Route::post('/labels', 'LabelController@create');
Route::post('/labels/{id_label}', 'LabelController@update');
Route::delete('/labels/{id_label}', 'LabelController@delete');

//Oeuvres
Route::get('/oeuvres', 'OeuvreController@index');
Route::get('/oeuvres/{id_oeuvre}', 'OeuvreController@show');
Route::post('/oeuvres', 'OeuvreController@create');
Route::post('/oeuvres/{id_oeuvre}', 'OeuvreController@update');
Route::delete('/oeuvres/{id_oeuvre}', 'OeuvreController@delete');

//Genres
Route::get('/genres', 'GenreController@index');
Route::get('/genres/{id_genre}', 'GenreController@show');
Route::post('/genres', 'GenreController@create');
Route::post('/genres/{id_genre}', 'GenreController@update');
Route::delete('/genres/{id_genre}', 'GenreController@delete');

//Images
Route::get('/images', 'ImageController@index');
Route::get('/images/{id_image}', 'ImageController@show');
Route::post('/images', 'ImageController@create');
Route::post('/images/{id_image}', 'ImageController@update');
Route::delete('/images/{id_image}', 'ImageController@delete');

//Videos
Route::get('/videos', 'VideoController@index');
Route::get('/videos/{id_video}', 'VideoController@show');
Route::post('/videos', 'VideoController@create');
Route::post('/videos/{id_video}', 'VideoController@update');
Route::delete('/videos/{id_video}', 'VideoController@delete');

//Sons
Route::get('/sons', 'SonController@index');
Route::get('/sons/{id_son}', 'SonController@show');
Route::post('/sons', 'SonController@create');
Route::post('/sons/{id_son}', 'SonController@update');
Route::delete('/sons/{id_son}', 'SonController@delete');