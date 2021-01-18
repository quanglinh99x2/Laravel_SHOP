<?php

use Illuminate\Support\Facades\Route;
// thêm middleware sessionvali để sử dụng được request->session
Route::group(['middleware' => ['sessionVali','sessionShareView']], function () {

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

    //Cart
    Route::get('cart',[
        'as'=>'cart.index',
        'uses'=>'CartController@index'
    ]);
    Route::post('cart/add',[
        'as'=>'cart.add_cart_ajax',
        'uses'=>'CartController@add_cart_ajax'
    ]);
    Route::post('cart/multiAdd',[
        'as'=>'cart.add_multi_to_cart',
        'uses'=>'CartController@addCartMulti'
    ]);
    Route::get('cart/destroy','CartController@destroy')->name('cart.destroy');
    Route::post('cart/delete_item',[
        'as'=>'cart.delete_item',
        'uses'=>'CartController@deleteItemCart'
    ]);
    Route::post('cart/delete_item_on',[
        'as'=>'cart.delete_item_on',
        'uses'=>'CartController@deleteItemCartShow'
    ]);
    Route::post('cart/update',[
        'as'=>'cart.update_product',
        'uses'=>'CartController@updateProduct'
    ]);

    //Login-Checkout
    Route::get('/login-checkout',[
        'as'=>'login.checkout',
        'uses'=>'CheckoutController@loginCheckout'
    ]);
    Route::post('/register',[
        'as'=>'register.customer',
        'uses'=>'CheckoutController@register'
    ]);
    Route::get('/checkout',[
        'as'=>'checkout.index',
        'uses'=>'CheckoutController@checkout'
    ])->middleware('loginCustomer');
    Route::post('/login_customer',[
        'as'=>'post.login.customer',
        'uses'=>'CheckoutController@postLogin'
    ]);
    Route::get('/logout-customer',[
        'as'=>'logout.customer',
        'uses'=>'CheckoutController@logout'
    ]);
    Route::get('/my-account',[
        'as'=>'account.customer',
        'uses'=>'CheckoutController@infoAccount'
    ])->middleware('loginCustomer');
    Route::post('/post-order',[
        'as'=>'post.order',
        'uses'=>'OrderController@postOrder'
    ]);
});

