<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FrondEndController;
use App\Http\Controllers\CompanyExportController;
use App\Http\Controllers\EmployeeExportController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Auth\AdminLoginController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(AdminLoginController::class)->group(function() {
    Route::get('admin/login', 'adminlogin')->name('admin.login');
    Route::post('admin/authenticate', 'adminauthenticate')->name('admin.authenticate');
    Route::get('admin/dashboard', 'admindashboard')->name('admin.dashboard');
    Route::post('admin/logout', 'adminlogout')->name('admin.logout');
});
Route::get('/list', [FrondEndController::class,'list'])->name('admin.listpack');

Route::group(['middleware'=>['admin']],function(){
    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
});

Route::controller(CompanyExportController::class)->group(function(){
    Route::get('exportcompanies', 'index');
    Route::get('companies-export', 'export')->name('companies.export');
});

Route::controller(EmployeeExportController::class)->group(function(){
    Route::get('exportemployees', 'index');
    Route::get('employees-export', 'export')->name('employees.export');

});






