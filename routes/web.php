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

Route::get('/', 'App\Http\Controllers\Welcome@welcome_Form_Login')->name('login_form_welcome');
Route::post('/', 'App\Http\Controllers\Welcome@welcome_Login_To')->name('login_to_welcome');

Route::get('/signup', 'App\Http\Controllers\User@user_Signup_Up')->name('up_signup_user');
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
                Route::post('/admin/logout', 'Employee@logout_Employee')->name('employee_logout');

                Route::get('/admin/dashboard', 'Employee@up_Login_Employee')->name('employee_login_up');
                Route::post('/admin/dashboard', 'Employee@dashboard_Employee_To')->name('to_employee_dashboard');
                Route::post('/admin/dashboard', 'Employee@dashboard_Employee_Edit')->name('edit_employee_dashboard');

                Route::get('/admin/exportData', 'ExportData@export_Data_Up')->name('up_data_export');
                Route::post('/admin/exportData', 'ExportData@export_Data_In')->name('in_data_export');

                Route::post('/admin/invoice', 'Invoice@Invoice_To')->name('to_invoice');

                Route::get('/admin/staff', 'Staff@staff_To')->name('to_staff');
                Route::post('/admin/staff/add', 'Staff@staff_Create_To')->name('to_create_staff');
                Route::post('/admin/staff/delete', 'Staff@staff_Delete_To')->name('to_delete_staff');

                Route::get('/admin/room', 'Room@room_To')->name('to_room');
                Route::post('/admin/room/add', 'Room@room_Create_To')->name('to_create_room');
                Route::post('/admin/room/delete', 'Room@room_Delete_To')->name('to_delete_room');

                Route::post('/admin/payment', 'Payment@payment_To')->name('to_payment');
                Route::post('/admin/payment/delete', 'Payment@payment_Delete_To')->name('to_delete_payment');

                Route::get('/admin/roombook', 'Payment@payment_To_Check_Room')->name('room_check_to_payment');

                Route::get('/admin/roombook', 'Roombook@roombook_To')->name('to_roombook');
                Route::post('/admin/roombook/add', 'Roombook@roombook_To_Add')->name('add_to_roombook');
                Route::post('/admin/roombook/confirm', 'Roombook@roombook_To_Confirm')->name('confirm_to_roombook');
                Route::post('/admin/roombook/delete', 'Roombook@roombook_To_Delete')->name('delete_to_roombook');

                Route::post('/admin/roombook/edit', 'RoombookEdit@roombook_Edit_To')->name('to_edit_roombook');

            }
        );
    }
);
