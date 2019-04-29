<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


$router->get(
    '/',
    [
        'as' => 'home',
        'uses' => 'ShopController@listCategories'
    ]
);

$router->get(
    '/category/{id}',
    [
        'as' => 'category',
        'uses' => 'ShopController@listProductsByCategory'
    ]
);

$router->get(
    '/brand/{id}',
    [
        'as' => 'brand',
        'uses' => 'ShopController@listProductsByBrand'
    ]
);

$router->get(
    '/type/{id}',
    [
        'as' => 'type',
        'uses' => 'ShopController@listProductsByType'
    ]
);

$router->get(
    '/product/{id}',
    [
        'as' => 'product',
        'uses' => 'ShopController@oneProduct'
    ]
);

$router->get(
    '/cart',
    [
        'as' => 'cart',
        'uses' => 'CartController@listCart'
    ]
);

$router->post(
    '/cart',
    [
        'as' => 'addCart',
        'uses' => 'CartController@addCart'
    ]
);


