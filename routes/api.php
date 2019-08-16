<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->prefix('v1')->group(function () {
    /*
    Route::get('/products', 'ProductsController@index');
    Route::post('/products', 'ProductsController@store');
    Route::put('/products/{product}', 'ProductsController@update');
    Route::get('/products/{product}', 'ProductsController@show');
    Route::delete('/products/{product}', 'ProductsController@destroy');
    */

    //Route::resource('/products', 'ProductsController');

    Route::get('users/me', function () {
        //return request()->user();
        return \Auth::user();
    });

    Route::resources([
        '/products' => 'ProductsController',
        '/users' => 'UsersController'
        ]);
    
    /*
    Route::get('cors_example', function () {
        return ['status'=>'ok'];
    })->middleware('cors');
    */
});