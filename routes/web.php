<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\Login@create_login')->name('login');

Route::get('/user', 'App/Http/Controllers/SignupUser@index_user')->name('user');
Route::post('/signup', 'App/Http/Controllers/SignupUser@create_user')->name('signup');

Route::get('/admin/dashboard', 'App/Http/Controllers/EmployeeLogin@index_employee')->name('dashboard');

Route::get('/admin/room', 'App\Http\Controllers\Admin\roomShowManage@index_room')->name('room');
Route::post('/admin/room', 'App\Http\Controllers\Admin\roomShowManage@create_room')->name('room_add');
Route::post('/admin/room', 'App\Http\Controllers\Admin\roomShowManage@destroy_room')->name('room_remove');

Route::get('/admin/staff', 'App\Http\Controllers\Admin\StaffShowManage@index_staff')->name('staff');
Route::post('/admin/staff', 'App\Http\Controllers\Admin\StaffShowManage@create_staff')->name('staff_add');
Route::post('/admin/staff', 'App\Http\Controllers\Admin\StaffShowManage@destroy_staff')->name('staff_remove');

Route::get('/admin/roombook', 'App\Http\Controllers\Admin\RoombookShowCheckManage@index_roombook')->name('roombook');
Route::post('/admin/roombook', 'App\Http\Controllers\Admin\RoombookShowCheckManage@create_roombook')->name('roombook_add');
Route::post('/admin/roombook', 'App\Http\Controllers\Admin\RoombookShowCheckManage@destroy_roombook')->name('roombook_delete');

Route::get('/admin/payment', 'App\Http\Controllers\Admin\PaymentShowPrintManage@index_payment')->name('payment');

Route::get('/admin/invoice', 'App\Http\Controllers\Admin\InvoiceShow@show_invoice')->name('invoice');

Route::post('/admin/exportData', 'App\Http\Controllers\Admin\ExportDataShow@show_exportdata')->name('exportdata');


