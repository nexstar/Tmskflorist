<?php
//-- 20180907

Route::get('/Online', function () {
    return view('Online.index');
})->name('online.index');

Route::get('/friend', 'OnlineFriendController@index')->name('Online.Friend.index');

Route::resource('/onlinearticle', 'OnlineArticleController');

Route::resource('/onlinenew', 'OnlineNewController');

Route::resource('/customertimersms', 'CustomerTimerSmsController');
//--- end of 20180907

    Route::get('/', function () {
        return view('welcome');
    });

//用戶新增測試
    Route::get('/TestInsertUser', [
        'as' => 'TestInsertUser',
        'uses' => 'UserController@TestInsertUser'
    ]);

    //Login OK
    Route::post('/login', [
		'as' => 'logon',
		'uses' => 'UserController@login'
	])->name('UserController.login');

Route::group([ 'middleware' => ['logonauth'] ], function(){
 
	Route::get('/success', [
		'as' => 'success',
		'uses' => 'UserController@index'
	])->name('UserController.index');


	Route::resource('/customerinfo','CustomerInfoController');
	Route::resource('/customergroup','CustomerGroupController');
	
	Route::get('/ExcelExport', 'CustomerInfoController@ExcelExport')->name('customerinfo.ExcelExport');

	Route::get('/headinfo', 'UserController@edit')->name('UserController.edit');
	Route::post('/usercontrollerupdate', 'UserController@update')->name('UserController.update');

	Route::post('singlesms', 'SmsController@Single')->name('smscontroller.single');
	Route::get('groupsms/{id}', 'SmsController@Group')->name('smscontroller.group');
	Route::post('sendsms', 'SmsController@Send')->name('smscontroller.send');

});

//errors
    Route::group(['prefix' => 'errors'],function (){

        Route::get('/403', function () {
            return view('errors.403');
        })->name('errors.403');

        Route::get('/404', function () {
            return view('errors.404');
        })->name('errors.404');

        Route::get('/443', function () {
            return view('errors.443');
        })->name('errors.443');

        Route::get('/500', function () {
            return view('errors.500');
        })->name('errors.500');

        Route::get('/503', function () {
            return view('errors.503');
        })->name('errors.503');

    });


