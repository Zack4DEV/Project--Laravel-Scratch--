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

Route::post('/login', 'App\Http\Controllers\Welcome@welcome_Form_Login')->name('login_form_welcome');
Route::post('/login', 'App\Http\Controllers\Welcome@welcome_Login_To')->name('login_to_welcome');

Route::post('/signup', 'App\Http\Controllers\User@user_Signup_Up')->name('up_signup_user');
Route::post('/signup', 'App\Http\Controllers\User@user_Signup_In')->name('in_signup_user');

Route::get('/home', 'App\Http\Controllers\Home@home_Create_Roombook_To')->name('to_roombook_create_home');
Route::post('/home', 'App\Http\Controllers\Home@home_Create_Roombook')->name('roombook_create_home');

Route::post('/logout', 'App\Http\Controllers\User@user_Logout')->name('logout_user');


Route::group(
    [
        'prefix' => config('admin.prefix'),
        'namespace' => 'App\\Http\\Controllers',
        'middleware' => 'admin',
        'as' => 'admin.',
    ],
    function () {
        Route::middleware(['auth:admin'])->group(
            function () {

                Route::post('/login', 'Employee@up_Login_Employee')->name('employee_login_Up');
                Route::post('/logout', 'Employee@logout_Employee')->name('employee_logout');

                Route::get('/dashboard', 'Employee@dashboard_Employee_To')->name('to_employee_dashboard');
                Route::post('/dashboard', 'Employee@dashboard_Employee_Edit')->name('edit_employee_dashboard');

                Route::get('/exportData', 'ExportData@export_Data_Up')->name('up_data_export');
                Route::post('/exportData', 'ExportData@export_Data_In')->name('in_data_export');

                Route::post('/invoice', 'Invoice@Invoice_To')->name('to_invoice');

                Route::get('/staff', 'Staff@staff_To')->name('to_staff');
                Route::post('/staff/add', 'Staff@staff_Create_To')->name('to_create_staff');
                Route::post('/staff/delete', 'Staff@staff_Delete_To')->name('to_delete_staff');

                Route::get('/room', 'Room@room_To')->name('to_room');
                Route::post('/room/add', 'Room@room_Create_To')->name('to_create_room');
                Route::post('/room/delete', 'Room@room_Delete_To')->name('to_delete_room');

                Route::post('/payment', 'Payment@payment_To')->name('to_payment');
                Route::post('/payment/delete', 'Payment@payment_Delete_To')->name('to_delete_payment');

                Route::get('/roombook', 'Payment@payment_To_Check_Room')->name('room_check_to_payment');

                Route::get('/roombook', 'Roombook@roombook_To')->name('to_roombook');
                Route::post('/roombook/add', 'Roombook@roombook_To_Add')->name('add_to_roombook');
                Route::post('/roombook/confirm', 'Roombook@roombook_To_Confirm')->name('confirm_to_roombook');
                Route::post('/roombook/delete', 'Roombook@roombook_To_Delete')->name('delete_to_roombook');

                Route::post('/roombook/edit', 'RoombookEdit@roombook_Edit_To')->name('to_edit_roombook');

            }
        );
    }
);
