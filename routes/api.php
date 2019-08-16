<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
    /*
    Route::get('/products', 'ProductsController@index');
    Route::post('/products', 'ProductsController@store');
    Route::put('/products/{product}', 'ProductsController@update');
    Route::get('/products/{product}', 'ProductsController@show');
    Route::delete('/products/{product}', 'ProductsController@destroy');
    */

    //Route::resource('/products', 'ProductsController');

    Route::resources([
        '/products' => 'ProductsController',
        '/users' => 'UsersController'
        ]);
});