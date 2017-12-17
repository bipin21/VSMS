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
Route::post('/customer', ['uses'=>'CustomerController@update','as'=>'customersupdate.update']);

Route::resource('customers','CustomerController');
Route::resource('customerparts','CustomerPartController');
//Route::resource('customersupdate','CustomerController');

Route::get('/report', 'HomeController@report');
//ledger 
Route::get('/ledger', 'LedgerController@index');
Route::post('/ledger', ['uses'=>'LedgerController@addledger','as'=>'ledger.add']);
Route::resource('ledgers','LedgerController');

Route::get('/service', 'ServiceController@index');
Route::get('addserv', 'ServiceController@serv');
Route::post('saveservice', 'ServiceController@saveservice');

Route::post('/service',['uses'=>'ServiceController@addbikeservice','as'=>'bikeservice.add']);

Route::get('/inventoryt', 'InventoryController@indext')->name('inventory');
Route::get('/inventory', 'InventoryController@indext')->name('inventory');
Route::get('/inventoryparts', 'InventoryController@parts')->name('inventory');
Route::post('importExcelPart', 'PurchaseController@saveparts');
Route::post('importExcelBike', 'PurchaseController@savebikes');

// Bill and Sales Management
Route::get('/demobill', 'BillController@demo');
Route::get('/bikebill', 'BillController@bike');
Route::get('/vatbill', 'BillController@vat');
Route::get('/partsbill', 'BillController@parts');
Route::post('partssave', 'BillController@partssave');
Route::post('partsbillsave', 'BillController@partsbillsave');

Route::get('/testbill', 'BillController@test');
Route::post('/testbill', 'BillController@testsave');




  Route::post('save_parts',['uses'=>'PurchaseController@saveparts','as'=>'save_parts.add']);


//Route::get('importExport', 'MaatwebsiteDemoController@importExport');
//Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');


//Credit debit

