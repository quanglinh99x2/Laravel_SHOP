<?php

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

Route::get('/admin','AdminController@loginAdmin');
//post login sử dụng AJAX
Route::post('/postLogin','AdminController@postLoginAdmin');
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('admin/logout',[
    'as'=>'getLogoutAdmin',
    'uses'=>'AdminController@logoutAdmin'
]);

Route::group(['prefix'=>'/admin','middleware'=>'loginAdmin'],function(){
    Route::get('/home',function(){
        return view ('admin.home');
    });
    Route::prefix('/categories')->group(function(){
        Route::get('/',[
            'as'=>'categories.index',
            'uses'=>'CategoryController@index'
        ])->middleware('can:list-category');
        Route::get('/add',[
            'as'=>'categories.create',
            'uses'=>'CategoryController@create'
        ])->middleware('can:add-category');

        Route::post('/postAdd',[
            'as'=>'categories.postAdd',
            'uses'=>'CategoryController@postAdd'
        ]);
        Route::get('/edit/{id}',[
            'as'=>'categories.edit',
            'uses'=>'CategoryController@edit'
        ])->middleware('can:edit-category');
        Route::post('/postEdit/{id}',[
            'as'=>'categories.postEdit',
            'uses'=>'CategoryController@postEdit'
        ]);
        Route::get('/delete/{id}',[
            'as'=>'categories.delete',
            'uses'=>'CategoryController@delete'
        ])->middleware('can:delete-category');

    });
    Route::prefix('/menus')->group(function(){
        Route::get('/',[
            'as'=>'menus.index',
            'uses'=>'MenuController@index'
        ])->middleware('can:list-menu');
        Route::get('/add',[
            'as'=>'menus.add',
            'uses'=>'MenuController@add'
        ])->middleware('can:add-menu');
        Route::post('/postAdd',[
            'as'=>'menus.postAdd',
            'uses'=>'MenuController@postAdd'
        ]);
        Route::get('/edit/{id}',[
            'as'=>'menus.edit',
            'uses'=>'MenuController@edit'
        ])->middleware('can:edit-menu');
        Route::post('/postEdit/{id}',[
            'as'=>'menus.postEdit',
            'uses'=>'MenuController@postEdit'
        ]);
        Route::get('/delete/{id}',[
            'as'=>'menus.delete',
            'uses'=>'MenuController@delete'
        ])->middleware('can:delete-menu');
    });
    //Product
    Route::prefix('product')->group(function(){
        Route::get('/',[
            'as'=>'product.index',
            'uses'=>'AdminProductController@index'
        ])->middleware('can:list-product');
        Route::get('add',[
            'as'=>'product.add',
            'uses'=>'AdminProductController@add'
        ])->middleware('can:add-product');
        Route::post('postAdd',[
            'as'=>'product.postAdd',
            'uses'=>'AdminProductController@postAdd'
        ]);
        Route::get('edit/{id}',[
            'as'=>'product.edit',
            'uses'=>'AdminProductController@edit'
        ])->middleware('can:edit-product');
        Route::post('postEdit/{id}',[
            'as'=>'product.postEdit',
            'uses'=>'AdminProductController@postEdit'
        ]);
        Route::get('/delete/{id}',[
            'as'=>'product.delete',
            'uses'=>'AdminProductController@delete'
        ])->middleware('can:delete-product');
        Route::get('/deleteImage/{id}',[
            'as'=>'product.delete_image_pro',
            'uses'=>'AdminProductController@deleteImagePro'
        ]);
        //search ajax
        Route::get('/searchAjax',[
            'as'=>'product.search',
            'uses'=>'LiveSearchController@searchProductAjax'
        ]);
    });
    Route::prefix('slider')->group(function() {
        Route::get('/', [
            'as' => 'slider.index',
            'uses' => 'SliderController@index'
        ])->middleware('can:list-slider');
        Route::get('add', [
            'as' => 'slider.add',
            'uses' => 'SliderController@add'
        ])->middleware('can:add-slider');
        Route::post('postAdd', [
            'as' => 'slider.postAdd',
            'uses' => 'SliderController@postAdd'
        ]);
        Route::get('edit/{id}',[
            'as'=>'slider.edit',
            'uses'=>'SliderController@edit'
        ])->middleware('can:edit-slider');
        Route::post('postEdit/{id}',[
            'as'=>'slider.postEdit',
            'uses'=>'SliderController@postEdit'
        ]);
        Route::get('/delete/{id}',[
            'as'=>'slider.delete',
            'uses'=>'SliderController@delete'
        ])->middleware('can:delete-slider');

    });
    Route::prefix('setting')->group(function() {
        Route::get('/', [
            'as' => 'setting.index',
            'uses' => 'AdminSettingController@index'
        ])->middleware('can:list-setting');
        Route::get('add', [
            'as' => 'setting.add',
            'uses' => 'AdminSettingController@add'
        ])->middleware('can:add-setting');

        Route::post('postAdd', [
            'as' => 'setting.postAdd',
            'uses' => 'AdminSettingController@postAdd'
        ]);
        Route::get('edit/{id}',[
            'as'=>'setting.edit',
            'uses'=>'AdminSettingController@edit'
        ])->middleware('can:edit-setting');
        Route::post('postEdit/{id}',[
            'as'=>'setting.postEdit',
            'uses'=>'AdminSettingController@postEdit'
        ]);
        Route::get('/delete/{id}',[
            'as'=>'setting.delete',
            'uses'=>'AdminSettingController@delete'
        ])->middleware('can:delete-setting');
    });
    //User
    Route::prefix('users')->group(function() {
        Route::get('/', [
            'as' => 'users.index',
            'uses' => 'AdminUserController@index'
        ])->middleware('can:list-user');
         Route::get('add', [
            'as' => 'user.add',
            'uses' => 'AdminUserController@add'
         ])->middleware('can:add-user');
        Route::post('postAdd', [
            'as' => 'user.postAdd',
            'uses' => 'AdminUserController@postAdd'
        ]);
        Route::get('edit/{id}',[
            'as'=>'user.edit',
            'uses'=>'AdminUserController@edit'
        ])->middleware('can:edit-user');

        Route::post('postEdit/{id}',[
            'as'=>'user.postEdit',
            'uses'=>'AdminUserController@postEdit'
        ]);
        Route::get('/delete/{id}',[
            'as'=>'user.delete',
            'uses'=>'AdminUserController@delete'
        ])->middleware('can:delete-user');

    });
    Route::prefix('roles')->group(function() {
        Route::get('/', [
            'as' => 'roles.index',
            'uses' => 'AdminRoleController@index'

        ])->middleware('can:list-role');

        Route::get('add', [
            'as' => 'role.add',
            'uses' => 'AdminRoleController@add'

        ])->middleware('can:add-role');

        Route::post('postAdd', [
            'as' => 'role.postAdd',
            'uses' => 'AdminRoleController@postAdd'
        ]);
        Route::get('edit/{id}',[
            'as'=>'role.edit',
            'uses'=>'AdminRoleController@edit'
        ])->middleware('can:edit-role');

        Route::post('postEdit/{id}',[
            'as'=>'role.postEdit',
            'uses'=>'AdminRoleController@postEdit'
        ]);

        Route::get('/delete/{id}',[
            'as'=>'role.delete',
            'uses'=>'AdminRoleController@delete'
        ])->middleware('can:delete-role');

    });
    Route::prefix('permissions')->group(function() {
        Route::get('/', [
            'as' => 'permission.create',
            'uses' => 'AdminPermissionController@create'
        ]);
        Route::post('store',[
            'as'=>'permission.store',
            'uses' => 'AdminPermissionController@store'
        ]);
    });
    Route::prefix('trademark')->group(function() {
        Route::get('/', [
            'as' => 'trademarks.index',
            'uses' => 'TrademarkController@index'
        ])->middleware('can:list-trademark');
        Route::get('add', [
            'as' => 'trademark.add',
            'uses' => 'TrademarkController@add'
        ])->middleware('can:add-trademark');
        Route::post('postAdd', [
            'as' => 'trademark.postAdd',
            'uses' => 'TrademarkController@postAdd'
        ]);
        Route::get('edit/{id}',[
            'as'=>'trademark.edit',
            'uses'=>'TrademarkController@edit'
        ])->middleware('can:edit-trademark');
        Route::post('postEdit/{id}',[
            'as'=>'trademark.postEdit',
            'uses'=>'TrademarkController@postEdit'
        ]);
        Route::get('/delete/{id}',[
            'as'=>'trademark.delete',
            'uses'=>'TrademarkController@delete'
        ])->middleware('can:delete-trademark');

    });
});

// Route::get('/','PagesController@index);
