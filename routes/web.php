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

Route::get('/', 'App\Http\Controllers\EmployeeLogin@formLogin')->name('welcome');
Route::post('/signup', 'App\Http\Controllers\UserLogin@user_signup')->name('user_signup');
Route::post('/logout/user', 'App\Http\Controllers\UserLogin@user_logout')->name('user_logout');
Route::post('/login/user', 'App\Http\Controllers\UserLogin@user_login')->name('user_login');
Route::get('/home', 'App\Http\Controllers\UserLogin@user_showHome')->name('user_showHome');



Route::group(
    [
        'prefix' => config('admin.prefix'),
        'namespace' => 'App\\Http\\Controllers',
    ],
    function () {
        Route::post('/logout', 'App\Http\Controllers\EmployeeLogin@logout_employee')->name('employee_logout');
        Route::post('/login', 'App\Http\Controllers\EmployeeLogin@login_employee')->name('employee_login');

        Route::middleware(['auth:admin'])->group(
            function () {
                Route::get('/dashboard', 'App\Http\Controllers\EmployeeLogin@showDashboard_employee')->name('dashboard');

                Route::post('/exportData', 'App\Http\Controllers\ExportData@exportdata')->name('exportdata');


                Route::post('/invoice', 'App\Http\Controllers\Invoice@show_invoice')->name('show_invoice');

                Route::get('/payment', 'App\Http\Controllers\Payment@show_payment')->name('payment_show');

                Route::post('/payment/delete', 'App\Http\Controllers\Payment@destroy_payment')->name('payment_delete');

                Route::get('/roombook', 'App\Http\Controllers\Roombook@show_roombook')->name('roombook_show');
                Route::post('/roombook/add', 'App\Http\Controllers\Roombook@create_roombook')->name('roombook_add');
                Route::post('/roombook/delete', 'App\Http\Controllers\Roombook@destroy_roombook')->name('roombook_delete');


                Route::get('/room', 'App\Http\Controllers\Room@show_room')->name('room_show');
                Route::post('/room/add', 'App\Http\Controllers\Room@create_room')->name('room_add');
                Route::post('/room/delete', 'App\Http\Controllers\Room@destroy_room')->name('room_delete');

                Route::get('/staff', 'App\Http\Controllers\Staff@show_staff')->name('staff_show');
                Route::post('/staff/add', 'App\Http\Controllers\Staff@create_staff')->name('staff_add');
                Route::post('/staff/delete', 'App\Http\Controllers\Staff@destroy_staff')->name('staff_delete');
            }
        );
    }
);
