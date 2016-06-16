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
    Route::post('/tuyen-dung', 'CustomerController@storeCareers')->name('career');


    // Route page contact
    Route::get('/lien-he', function () {  return view('pages.contact'); })->name('contact');

    
    // Route page apply now
    Route::get('/ap-dung-bay-gio', function () {  return view('pages.apply'); })->name('apply.index');
    Route::post('/ap-dung-bay-gio', 'CustomerController@storeApplyNow')->name('apply.store');
   

    /**
     * @ Admin panel
     */

    Route::group(['prefix' => 'admin'], function () {

        Route::get('/mtkt',[
            'as'         => 'admin',
            'middleware' => 'auth',
            'uses'       => 'Auth\AuthController@getIndex'
        ]);
        

        // Auth
        Route::get('/mtkt/login', 'Auth\AuthController@getLogins')
        ->name('admin.login');

        Route::post('/mtkt/login', 'Auth\AuthController@postLogins')
        ->name('admin.post.login');

        Route::put('/mtkt/update/account', 'Auth\AuthController@updateUserAdmin')
        ->name('admin.update.account');

        Route::get('/mtkt/logout', 'Auth\AuthController@getLogouts')->name('admin.logout');

        Route::put('/mtkt/cap-nhat-tai-khoan/{id}', 'Auth\AuthController@updateAccount')
        ->name('updateAccount');
        // End Auth



        Route::group(['middleware' => 'auth'], function () { 

            Route::get('/mtkt/thong-tin-khach-hang', 'CustomerController@showInfoCustomer')
            ->name('showInfoCustomer');
           

            Route::get('/mtkt/thong-tin-khach-hang/{id}', 'CustomerController@storeInfoCustomer')
            ->name('storeInfoCustomer');

            Route::put('/mtkt/thong-tin-khach-hang/{id}', 'CustomerController@editInfoCustomer')
            ->name('editInfoCustomer');

            Route::delete('/mtkt/thong-tin-khach-hang/{id}', 'CustomerController@deleteCustomer')
            ->name('deleteCustomer');


            Route::get('/mtkt/thong-tin-tuyen-dung', 'CustomerController@showInfoCareer')
            ->name('showInfoCareer');

            Route::get('/mtkt/thong-tin-tuyen-dung/{id}', 'CustomerController@storeCareer')
            ->name('storeCareer');


            Route::get('/mtkt/mau-thong-bao-email', 'CustomerController@showContentEmail')
            ->name('showContentEmail');

            Route::put('/mtkt/mau-thong-bao-email-cap-nhat', 'CustomerController@updateTemplateEmail')
            ->name('updateTemplateEmail');

            Route::get('/mtkt/tai-khoan', 'CustomerController@showAccountAdmin')
            ->name('showAccountAdmin');

            Route::post('export', 'CustomerController@export')->name('export.file');
        });
    
    });
});
