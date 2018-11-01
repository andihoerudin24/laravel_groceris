<?php
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
Route::get('/','IndexController@index');
Route::get('/about','IndexController@about');
Route::get('/contact','IndexController@contact');
Route::get('/faq','IndexController@faq');
Route::get('/terms','IndexController@terms');
Route::get('/privacy','IndexController@privacy');

Route::resource('Shop','ShopController');

//route for index login register for user
Route::get('/cart','CartController@index')->name('cart');
Route::get('/cart/{id}','CartController@delete')->name('cart.delete');

Route::get('/chekout','ChekoutController@index')->name('chekout');
Route::post('/chekout','ChekoutController@add')->name('chekout.post');

Route::get('/enter', 'indexController@login')->name('enter');
Route::post('/enter','indexController@loginpost')->name('loginpost');
Route::get('/register','indexController@register')->name('register');
Route::post('/register','indexController@postregister')->name('postregister');
//route for index login register for user
//route for transaksi history
Route::get('/transaksi/history','TransaksiController@index')->name('transaksihistory')->middleware('auth');
Route::put('transaksi/upload/{id}','TransaksiController@upload')->name('upload');
//route for setting
Route::get('/setting','SettingController@index')->name('setting')->middleware('auth');
Route::put('/setting/upload/{id}','SettingController@update')->name('setting.update');
//route for shop show product by id
Route::get('product_byid/{id}','ShopController@show_id')->name('product_by_categori');

Route::post('/login','Admin\AdminController@login')->name('login');
Route::get('/login','Admin\AdminController@index')->name('Admin.index');

Route::group(['middleware'=>'auth:admin'], function() {

        Route::get('/api/datatables/categories','Admin\CategoriesController@datatable')->name('api.datatable.categories');
        Route::get('/api/datatables/products','Admin\ProductsController@datatable')->name('api.datatable.products');
        Route::get('/api/datatables/transaction','Admin\TransactionController@datatable')->name('api.datatable.transaction');
        Route::get('/api/datatables/buyer','Admin\BuyerController@datatable')->name('api.datatable.buyer');
           //route for categories
            Route::resource('categories','Admin\CategoriesController');
            //route for categories
            //route for Products
            Route::resource('products', 'Admin\ProductsController');
            //route for Products
            Route::resource('transaction', 'Admin\TransactionController');
            //route for Buyer
            Route::resource('buyer','Admin\BuyerController');
            //route for Buyer

            //route for login register admin
            Route::post('logout','Admin\AdminController@logout')->name('logout');
            //route for login register admin


            //route dashboard admin
            Route::get('/Dashboard','Admin\DashboardController@index')->name('dashboard');
            Route::get('/cetak','Admin\DashboardController@cetak')->name('cetak');
            //route dashboard admin

});

