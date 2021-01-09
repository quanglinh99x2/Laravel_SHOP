<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@index')->name('home.index');

//category
// Route::get('/category/{$id}','PagesController@product_categories')->name('category.products');

Route::get('category/{id}',[
    'as'=>'category.products',
    'uses'=>'PagesController@product_categories'
]);
Route::get('trademark/{id}',[
    'as'=>'trademark.products',
    'uses'=>'PagesController@product_trademarks'
]);
Route::get('product/{slug}',[
    'as'=>'detail.products',
    'uses'=>'PagesController@detail_product'
]);

