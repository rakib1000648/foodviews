<?php

// General routes ---------------------------------------------------------------------------------

Route::get('/', function () {
    return view('layouts.customer.home');
});


// System Admin routes ----------------------------------------------------------------------------


Route::group(['prefix'=>'systemadmin'], function(){

  Route::get('/','SystemAdmin\HomeController@index');
  Route::get('/companies','SystemAdmin\HomeController@index');
  Route::get('/ranks','SystemAdmin\RankController@index');
  Route::get('/requests','SystemAdmin\RequestController@show');
  Route::get('/requests/accept/{id}','SystemAdmin\RequestController@acceptcompany');

});





// Company routes ---------------------------------------------------------------------------------

Route::get('/companyregister','Auth\CompanyRegister@show');
Route::post('/companyregister','Auth\CompanyRegister@save');
Route::get('/companyverify','Auth\CompanyRegister@coverify');



Route::get('/company/admin','Company\CompanyAdmin\HomeController@index');
Route::get('/company/admin/statistics','Company\CompanyAdmin\HomeController@index');





Route::get('/company/manager','Company\CompanyManager\HomeController@index');
Route::get('/company/accountant','Company\CompanyAccountant\HomeController@index');
Route::get('/customer','Customer\HomeController@index');

// Auth routes ------------------------------------------------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
