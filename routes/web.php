<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middlewar group. Now create something great!
|
*/


Route::get("/blog",'SectionController@blog');
Route::get("/post/{id}",'PostController@post');
Route::get("/seccion/{id}",'SectionController@seccion');
Route::group(['middleware' => 'auth'], function () {
    //
    Route::get('/admin/secciones', 'SectionController@sendAdminView');
    Route::post('/section-info', 'SectionController@getInfo');
    Route::post('/section-create', 'SectionController@create');
    Route::post('/section-update', 'SectionController@update');
    Route::post('/section-delete', 'SectionController@delete');

    Route::get('/admin/post/{id}','PostController@viewPostAdmin');
    Route::post('/post-info', 'PostController@getInfo');
    Route::post('/post-create', 'PostController@create');
    Route::post('/post-update', 'PostController@update');
    Route::post('/post-delete', 'PostController@delete');

    //crud categorías
    Route::get('/admin/categorias','CategoriaController@viewCategoriaAdmin');
    Route::post('/categoria-info',   'CategoriaController@getInfo');
    Route::post('/categoria-create', 'CategoriaController@create');
    Route::post('/categoria-update', 'CategoriaController@update');
    Route::post('/categoria-delete', 'CategoriaController@delete');

    //crud productos
    Route::get('/admin/producto/{id}','ProductoController@viewProductoAdmin');
    Route::post('/producto-info',   'ProductoController@getInfo');
    Route::post('/producto-create', 'ProductoController@create');
    Route::post('/producto-update', 'ProductoController@update');
    Route::post('/producto-delete', 'ProductoController@delete');
    Route::get('/logout', 'LoginController@logout');

});

//Save
Route::post("/saveComment",'PostController@saveComment');
Route::post("/getComments","PostController@getComments");
Route::post('/section-update', 'SectionController@update');

//Ruta para loguearse
Route::post('/login', 'LoginController@login');
//Desloguep
Route::get('/logout', 'LoginController@logout');
//Inicial 
Route::post("/send-messaege",'LoginController@sendMessage');
Route::get('/', ['as' => 'login', 'uses' => 'LoginController@landing']);

//Ruta del chat
Route::get("/Chat","ChatController@Chat");
