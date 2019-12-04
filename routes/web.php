<?php



Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function(){


    Route::group(['middleware' => 'admin'],function(){

        //Dashboard
        Route::get('dashboard','dashboardController@index')->name('dashboard');

         //admin_users
        Route::get('users','AdminUsersController@index')->name('admin.users');
        Route::get('users/create','AdminUsersController@create')->name('admin.create');
        Route::post('users','AdminUsersController@store')->name('admin.store');
        Route::get('users/{id}/edit','AdminUsersController@edit')->name('admin.edit');
        Route::put('users/{id}','AdminUsersController@update')->name('admin.update');
        Route::delete('users/{id}','AdminUsersController@destroy')->name('admin.delete');

        Route::post('logout','AdminUsersController@logout')->name('admin.logout');



     

        //Slider
        Route::get('sliders','SlidersController@index')->name('slider');
        Route::get('sliders/create','SlidersController@create')->name('slider.create');
        Route::post('sliders/store','SlidersController@store')->name('slider.store');
        Route::delete('sliders/delete/{id}','SlidersController@destroy')->name('slider.delete');


    });

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
