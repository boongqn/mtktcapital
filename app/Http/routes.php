<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test', function() {
    return Response::download('stuff/file/1464850848-icon1.zip');
});


Route::group(['middleware' => 'web'], function () {

    // Route page home
    Route::get('/', function () { return view('pages.home');  })->name('/');

    // Route page overview
    Route::get('/tong-quan-san-pham', function () {  return view('pages.overview');  })->name('overview');


     // Route page products
    Route::get('/san-pham-tai-chinh', function () { return view('pages.product'); })->name('product');

     // Route page program
    Route::get('/cac-loai-chuong-trinh', function () { return view('pages.program'); })->name('program');

     // Route page faq
    Route::get('/hoi-dap', function () { return view('pages.faq'); })->name('faq');

    // Route page customers-for-you
    Route::get('/chung-toi-danh-cho-ban', function () {   return view('pages.you');  })->name('you');

    // Route page transactions
    Route::get('/giao-dich-gan-day', function () { return view('pages.transaction');  })->name('transaction');

    // Route page privacy
    Route::get('/chinh-sach-rieng', function () {  return view('pages.privacy'); })->name('privacy');

    // Route page about
    Route::get('/gioi-thieu-tong-quan', function () {  return view('pages.about');  })->name('about');


    // Route page careers
    Route::get('/tuyen-dung', function () {  return view('pages.career');  })->name('career');
    Route::post('/careers', 'CustomerController@storeCareers');


    // Route page contact
    Route::get('/lien-he', function () {  return view('pages.contact'); })->name('contact');

    
    // Route page apply now
    Route::get('/ap-dung-bay-gio', 'CustomerController@applyNow')->name('apply.index');
    Route::post('/apply', 'CustomerController@storeApplyNow')->name('apply.store');
   

    /**
     * @ Admin panel
     */

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/request', [
             'as'         => 'admin',
             'middleware' => 'auth',
             'uses'       => 'AdminController@index'
        ]);
        
        Route::get('/request/login', 'Auth\AuthController@getSignIn')->name('admin.login');
        Route::post('/request/login', 'Auth\AuthController@postSignIn')->name('admin.login');

        Route::get('/token', 'AdminController@infoCustomer');
        Route::put('/token/{id}/update', 'AdminController@updateCustomer');
        Route::delete('/token/{id}/delete', 'AdminController@deleteCustomer');
        Route::put('/token/template/email', 'AdminController@updateTemplateEmail');

        Route::put('/token/account', 'AdminController@updateAccount');


    });


    Route::get('/auth/logout', [
        'as'         => 'admin.logout',
        'uses'       => 'Auth\AuthController@logout'
    ]);

    Route::get('export/{str}', 'AdminController@export');

});

