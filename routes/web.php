<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LMSController;
use App\Http\Controllers\Login_con;
use App\Http\Controllers\cl_case;
use App\Http\Controllers\invoice;
use App\Http\Controllers\bill;
use App\Http\Controllers\bill_print;
use App\Http\Controllers\financial_year;
use App\Http\Controllers\superadmin;
use App\Http\Controllers\admin;
use App\Http\Controllers\Auth;
use Dompdf\Dompdf;
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
Route::get('print_bill', function () {
    return view('print_bill');
});

Route::get('/', function () {
    return view('main_index');
});

Route::get('Login', function () {
    return view('index');
});

Route::get('SAdashboard',[superadmin::class,'numbers']);

Route::get('Adashboard',[admin::class,'numbers']);




Route::get('AuditLog(SA)', function () {
    return view('AuditLog(SA)');
});


Route::get('client_show',[LMSController::class,'show']);
//to take the control to show (client view)

Route::get('client_delete/{id}',[LMSController::class,'destroy']);

Route::get('create_client',[LMSController::class,'create']);

Route::post('client_submit',[LMSController::class,'store']);
//whenever it is submitted

Route::get('client_edit/{id}',[LMSController::class,'edit']);

Route::post('client_update/{id}',[LMSController::class,'update'])->name('client.update');

Route::get('case_show',[cl_case::class,'show']);
 
Route::get('case_delete/{id}',[cl_case::class,'destroy']);

Route::get('create_case/{id}',[cl_case::class,'create']);

Route::get('case_details/{id}',[cl_case::class,'index']);

Route::post('case_submit/{id}',[cl_case::class,'store'])->name('case.store');

Route::get('case_edit/{id}',[cl_case::class,'edit']);

Route::post('case_update/{id}',[cl_case::class,'update'])->name('case.update');

Route::get('invoice_show',[invoice::class,'show']);
 
Route::get('invoice_delete/{id}',[invoice::class,'destroy']);

Route::get('create_invoice/{id}',[invoice::class,'create']);

Route::post('invoice_submit/{id}',[invoice::class,'store'])->name('invoice.store');

Route::get('invoice_edit/{id}',[invoice::class,'edit'])->name('invoice.update');

Route::post('invoice_update/{id}',[invoice::class,'update'])->name('invoice.update');

Route::get('bill_show',[bill::class,'show']);
// Route::get('bill_print_show',[bill_print::class,'show']);

Route::get('bill_delete/{id}',[bill::class,'destroy']);

Route::get('create_bill/{id}',[bill::class,'create']);

Route::post('bill_submit/{id}',[bill::class,'store'])->name('bill.store');



Route::get('financial_year_show',[financial_year::class,'show']);
Route::get('financial_year_show(SA)',[financial_year::class,'show2']);
Route::get('financial_year_delete/{id}',[financial_year::class,'destroy']);
Route::get('financial_year_create',[financial_year::class,'create']);
Route::post('financial_year_submit',[financial_year::class,'store']);
Route::get('financial_year_edit/{id}',[financial_year::class,'edit']);
Route::post('financial_year_update/{id}',[financial_year::class,'update'])->name('financial.update');






Route::get("superadmin",[superadmin::class,'show']);

//going to add admin page
Route::get('addAdmin', function () {
    return view('addAdmin');
});

//index

Route::get('index', function () {
    return view('index');
});

//posting the values or registering user
Route::post("addAdmin_submit",[admin::class,'store']);

//posting the values or registering user
Route::get("handleAdminData(SA)",[admin::class,'show']);


//deleting admin
Route::get('addAdmin_delete/{id}',[admin::class,'destroy']);

//editing admin
Route::get("editAdmin/{id}",[admin::class,'edit']);

//updating
Route::post("editAdmin_update/{id}",[admin::class,'update'])->name('editAdmin.update');


//check if admin is present or not
Route::post('login', [admin::class, 'index']);

//check if supperadmin is present or not
Route::post('login', [superadmin::class, 'index']);


//posting the values or registering user
Route::post("/create",[Login_con::class,'create']);

// Route::get('login', [admin::class, 'index']);


//getting the datatable
Route::get("index",[Login_con::class,'login']);

Route::post("/check",[Login_con::class,'check_user']);

Route::get('/Adashboard',[Login_con::class,'protect']);


//loggind out
Route::get('/logout', [Login_con::class, 'logout'])->name('logout');
