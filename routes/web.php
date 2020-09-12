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


Route::get('/login', function(){
    return view('login');
})->name('login');
Route::get('/register', function (){
    return view('register');
})->name('register');
Route::get('/template', function (){
    return view('template');
})->name('template');
Route::get('/home', function (){
    return view('home');
})->name('home');
Route::get('/character', function (){
    return view('character');
})->name('character');
Route::get('/doll', function (){
    return view('doll');
})->name('doll');
Route::get('/keychain', function (){
    return view('keychain');
})->name('keychain');
Route::get('/pillow', function (){
    return view('pillow');
})->name('pillow');
Route::get('/productdetail', function (){
    return view('productdetail');
})->name('productdetail');
Route::get('/incart', function (){
    return view('incart');
})->name('incart');
Route::get('/checkout', function (){
    return view('checkout');
})->name('checkout');
Route::get('/orderrecieved', function (){
    return view('orderrecieved');
})->name('orderrecieved');
Route::get('/slipform', function (){
    return view('slipform');
})->name('slipform');
Route::get('/tracking', function (){
    return view('tracking');
})->name('tracking');


Route::get('/myaddress', function (){
    return view('myaddress');
})->name('myaddress');
Route::get('/aftertracking', function (){
    return view('aftertracking');
})->name('aftertracking');
Route::get('/searchproduct', function (){
    return view('searchproduct');
})->name('searchproduct');
Route::get('/manageproduc', function (){
    return view('manageproduct');
})->name('manageproduct');
Route::get('/inspectcustomerorder', function (){
    return view('inspectcustomerorder');
})->name('inspectcustomerorder');
Route::get('/test', function (){
    return view('test');
})->name('test');
Route::get('/test2', function (){
    return view('test2');
})->name('test2');
Route::get('/loginn', function (){
    return view('loginn');
})->name('loginn');
Route::get('/orderstatus', function (){
    return view('payment.orderstatus');
})->name('payment.orderstatus');

Route::get('/manageproduct', 'ProductController@index')->name('dashboard.manageproduct');
Route::get('/dashboard', 'ProductController@countUserAtDashboard')->name('dashboard.dashboard');



Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/nocart', function (){
        return view('product.nocart');
    })->name('nocart');

    Route::get('/product/addtocart/{id}', 'ProductController@addToCart');



    Route::get('/product/deleteitemfromcart/{id}', 'ProductController@deleteItemFromCart')->name('product.deleteitemfromcart');
    Route::get('/product/increaseSingleProduct/{id}', 'ProductController@increaseSingleProduct')->name('increaseSingleProduct');
    Route::get('/product/decreaseSingleProduct/{id}', 'ProductController@decreaseSingleProduct')->name('decreaseSingleProduct');
    Route::get('/createOrder', 'ProductController@createOrder');

    Route::get('/address/update', 'AddressesController@updateAddress');
    Route::get('/address', 'AddressesController@indexAddress')->name('address');
    Route::get('/address/insert', 'AddressesController@insertAddress');
    Route::get('/checkout', 'AddressesController@indexAddressAtCheckout');
    Route::get('/checkout/update', 'AddressesController@updateAddressAtCheckout');
    Route::get('/transaction', 'TransactionsController@index')->name('transactions.index');
    Route::post('/insert', 'TransactionsController@insertTransaction');
    Route::get('/inspect/{order_no}', 'TransactionsController@inspectOrder')->name('dashboard.inspect');
    Route::get('/showorder/{order_no}', 'TransactionsController@showOrder')->name('dashboard.showorder');
    Route::get('/showaddress/{order_no}', 'TransactionsController@showAddress')->name('dashboard.showaddress');
    Route::get('/myorder', 'AddressesController@indexOrderList')->name('myAccount.myorder');
});
Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');

Route::post('/change-password', 'Auth\ChangePasswordController@changepassword')->name('password.updated');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoriesController@index')->name('categories.index');
Route::get('/cart', 'ProductController@showCart')->name('product.showcart');
Route::get('/checkoutProducts', 'ProductController@checkoutProducts')->name('product.checkoutproducts');
Route::post('/createNewOrder', 'ProductController@createNewOrder');
Route::get('/paymentpage', 'PaymentsController@showPaymentPage')->name('payment.paymentpage');
Route::resource('product','ProductController');
Route::get('/editimage/{id}', 'ProductController@editImage')->name('editimage');
Route::get('/editproduct/{id}', 'ProductController@editProduct')->name('editproduct');
Route::resource('update', 'UpdatesController');
Route::get('/categories/{id}', 'CategoriesController@show')->name('categories.show');
Route::post('/showorderstatus', 'PaymentsController@orderStatus')->name('payment.showorderstatus');
Route::get('/auto', 'AutoCompleteController@index');
Route::post('/auto','AutoCompleteController@show')->name('autocomplete.show');
Route::post('/auto/showdistrict','AutoCompleteController@showDistrict')->name('autocomplete.showdistrict');
Route::get('/product2', 'ProductController@index2')->name('product.index2');
Route::get('getallproduct', 'ProductController@getProductAjax')->name('product.getProductAjax');
Route::get('/orderPanel', 'ProductController@ordersPanel')->name('dashboard.order');
Route::get('/delivered/{order_no}', 'ProductController@delivered')->name('dashboard.delivered');
Route::get('/myaccount', 'AddressesController@myAccount')->name('myAccount.myaccount');

/*Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/store', 'ProductController@store');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');
Route::get('/product/{id}/edit', 'ProductController@edit')->name('product.edit');
Route::get('/product/{id}/update', 'ProductController@update');
Route::post('/product/remove/{id}', 'ProductController@destroy');*/
