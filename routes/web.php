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

//Route::get('/', function () {
//    return view('auth.login');
//});
Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/form', 'Invoice@index');
Route::post('save', 'Invoice@save');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', ['uses'=>'AttendenceController@create','as'=>'attendence.add']);
Route::post('/addenquiry', [
    'uses'=>'EnquiryController@create',
    'as'=>'enquiry.add'
]);
/*Bar Chart*/
//Route::get('chartjs', 'HomeController@chartjs');

//Route::group(['middleware' => 'auth'], function() {
//      Route::get('/home', 'HomeController@dashboard');
//});

Route::get('/purchase', 'PurchaseController@index')->name('purchase');
Route::post('/purchase',['uses'=>'PurchaseController@addbike','as'=>'bike.add']);
Route::post('/purchaseparts',['uses'=>'PurchaseController@addbikeparts','as'=>'bikeparts.add']);
Route::get('/purchaseparts', 'PurchaseController@purchaseparts')->name('purchase');

Route::get('/enquiry', 'EnquiryController@index')->name('enquiry');
Route::get('/addenquiry', 'EnquiryController@add')->name('enquiry');
Route::post('/addenquiry', ['uses'=>'EnquiryController@create','as'=>'enquiry.add']);

Route::get('/sale', 'SaleController@index')->name('sale');
Route::get('/saleparts', 'SaleController@parts')->name('sale');

Route::get('/staff', 'StaffController@index')->name('staff');
Route::get('/addstaff', 'StaffController@add')->name('staff');
Route::post('/addstaff', ['uses'=>'StaffController@create','as'=>'staff.add']);

Route::get('/customer', 'CustomerController@index')->name('customer');
Route::post('/customer', 'CustomerController@customerservicesave')->name('customer');

Route::get('/report', 'HomeController@report');

Route::get('/service', 'ServiceController@index');
Route::post('/service',['uses'=>'ServiceController@addbikeservice','as'=>'bikeservice.add']);

Route::get('/inventory', 'InventoryController@index')->name('inventory');
Route::get('/inventoryparts', 'InventoryController@parts')->name('inventory');

// Bill and Sales Management
Route::get('/bikebill', 'BillController@bike');
Route::get('/partsbill', 'BillController@parts');
Route::post('partssave', 'BillController@partssave');
Route::post('partsbillsave', 'BillController@partsbillsave');

Route::get('/testbill', 'BillController@test');
Route::post('/testbill', 'BillController@testsave');

Route::get('/printbill', 'BillController@print');

Route::resource('customers','CustomerController');






