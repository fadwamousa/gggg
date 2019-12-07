<?php



Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'],function(){


    Route::group(['middleware' => 'admin'],function(){

        //Dashboard
        Route::get('dashboard','dashboardController@index')->name('dashboard');

        //admin_users

        Route::group(['namespace' => 'admin'],function(){

            Route::resource('users','AdminUsersController');

        });

        //Accounts
        Route::resource('accounts','AccountController');

        //Slider
        Route::resource('sliders','SlidersController');

        //Advertising
        Route::resource('advs','AdvertisingController');

        //Reports
        Route::resource('reports','ReportController');

        //membership
        Route::resource('membership','membershipController');


        //TemplateController
        Route::resource('templates','TemplateController');

        //Wakf
        Route::resource('wakf','WakfController');

        Route::resource('contacts','ContactController');

        //Setting
        Route::resource('setting','SettingController');
        Route::get('setting/create/{id}','SettingController@create')->name('setting.create');
        //phones for settings
        Route::post('phone/setting/store','SettingController@phone_store')->name('phone.setting.store');


        //kindergarten
        Route::resource('kindergarten','kindergartenController');
        Route::get('photoKind/{kind}','kindergartenController@add')->name('photoKind.add');
        Route::post('photoKind/store','kindergartenController@store_photo')->name('photoKind.store');
        Route::delete('photoKind/delete/{id}','kindergartenController@delete_photo')->name('photoKind.destroy');



        //Center
        Route::get('centers','CenterController@index')->name('centers.index');
        Route::get('center/create/{id}','CenterController@create')->name('centers.create');
        Route::post('center/store','CenterController@store')->name('centers.store');
        //phones for center
        Route::post('phone/center/store','CenterController@phone_store')->name('phone.store');

        //messages for Moms
        Route::get('messages' ,'CenterController@create_messages')->name('messages');
        Route::post('messages/store' ,'CenterController@store_messages')->name('messages.store');
        Route::put('messages/update/{id}' ,'CenterController@messages_update')->name('messages.update');
        Route::get('messages/edit/{id}' ,'CenterController@messages_edit')->name('messages.edit');
        Route::delete('messages/delete/{id}' ,'CenterController@messages_destroy')->name('messages.destroy');


        //Works for specific Center
        Route::get('works','CenterController@create_works')->name('works');
        Route::post('works/store','CenterController@store_works')->name('works.store');
        Route::put('works/update/{id}','CenterController@update_works')->name('works.update');
        Route::get('works/edit/{id}','CenterController@edit_works')->name('works.edit');
        Route::delete('works/delete/{id}','CenterController@delete_works')->name('works.destroy');

        //Charities
        Route::get('charities','charitiesController@index')->name('charities');
        Route::get('charities/create/{id}','charitiesController@create')->name('charities.create');
        Route::post('charities/store','charitiesController@store')->name('charities.store');


        //details of charities
        Route::get('details/create','charitiesController@create_detail')->name('detail.add');
        Route::post('details/store','charitiesController@details')->name('details.store');
        Route::get('details/edit/{id}','charitiesController@edit')->name('details.edit');
        Route::put('details/{id}','charitiesController@update')->name('details.update');
        Route::delete('details/delete/{id}','charitiesController@destroy')->name('details.delete');


        //targets
        Route::get('target/create','charitiesController@target_create')->name('target.add');
        Route::post('target/store','charitiesController@target_store')->name('target.store');
        Route::get('target/edit/{id}','charitiesController@target_edit')->name('target.edit');
        Route::put('target/{id}','charitiesController@target_update')->name('target.update');
        Route::delete('target/delete/{id}','charitiesController@target_destroy')->name('target.delete');



        //commites
        Route::get('commites','commitesController@index')->name('committes');
        Route::get('commites/create','commitesController@create')->name('committes.create');
        Route::get('commites/edit/{id}','commitesController@edit')->name('committes.edit');
        Route::put('commites/update/{id}','commitesController@update')->name('committes.update');
        Route::delete('commites/{id}','commitesController@destroy')->name('commites.delete');
        Route::post('commites','commitesController@store')->name('committes.store');
        Route::get('commites/target','commitesController@create_target')->name('committes.target.create');
        Route::post('commites/target/store','commitesController@store_target')->name('committes.target.store');
        Route::get('commites/target/edit/{id}','commitesController@edit_target')->name('committes.target.edit');
        Route::put('commites/target/update/{id}','commitesController@update_target')->name('committes.target.update');
        Route::delete('commites/target/delete/{id}','commitesController@delete_target')->name('committes.target.delete');





        //employee and career

        Route::get('career','CareerController@index')->name('career.show');
        Route::get('career/create','CareerController@create')->name('career.create');
        Route::get('career/edit/{id}','CareerController@edit')->name('career.edit');
        Route::post('career','CareerController@store')->name('career.store');
        Route::put('career/{id}','CareerController@update')->name('career.update');
        Route::delete('career/{id}','CareerController@destroy')->name('career.delete');

        //Employee
        Route::get('employee','CareerController@create_employee')->name('employee.create');
        Route::post('employee','CareerController@store_employee')->name('employee.store');
        Route::put('employee/update/{id}','CareerController@update_employee')->name('employee.update');
        Route::get('employee/edit/{id}','CareerController@edit_employee')->name('employee.edit');
        Route::delete('employee/delete/{id}','CareerController@destroy_employee')->name('employee.delete');


        //Events
        Route::get('events','EventsController@index')->name('events');
        Route::get('events/create','EventsController@create')->name('events.create');
        Route::post('events','EventsController@store')->name('events.store');
        Route::get('events/edit/{id}','EventsController@edit')->name('events.edit');
        Route::put('events/update/{id}','EventsController@update')->name('events.update');
        Route::delete('events/delete/{id}','EventsController@destroy')->name('events.delete');


        //Photos for events
        Route::get('photo/event/create','EventsController@create_photo_event')->name('photos.create');
        Route::post('photo/event/store','EventsController@store_photo_event')->name('photos.store');
        Route::delete('photo/event/delete/{id}','EventsController@delete_photo_event')->name('photos.delete');



        //cards
        Route::get('cards','CardsController@index')->name('cards');
        Route::get('cards/create','CardsController@create')->name('cards.create');
        Route::post('cards','CardsController@store')->name('cards.store');
        Route::delete('cards/{id}','CardsController@destroy')->name('cards.delete');

        //membership cards
        Route::get('memberships/cards','CardsController@index')->name('cards');
        Route::get('memberships/create/cards','CardsController@create_mem_card')->name('membership.card.create');
        Route::post('memberships/store/cards','CardsController@store_mem_card')->name('membership.card.store');
        Route::put('memberships/update/cards/{id}','CardsController@update_mem_card')->name('membership.card.update');
        Route::get('memberships/edit/cards/{id}','CardsController@edit_mem_card')->name('membership.card.edit');
        Route::delete('memberships/edit/cards/{id}','CardsController@destroy_mem_card')->name('membership.card.delete');


    });


    Route::post('logout','admin\AdminUsersController@logout')->name('admin.logout');


});



Auth::routes();

Route::get('admin/login','Auth\LoginController@showLoginForm')->name('form_login');
Route::post('admin/login','Auth\LoginController@login');


Route::get('/home', 'HomeController@index')->name('home');
