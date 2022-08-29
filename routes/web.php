<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
//    return view('welcome');
//});
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

});
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/carriers', [App\Http\Controllers\HomeController::class, 'list_carriers'])->name('carriers');
Route::get('/trucks', [App\Http\Controllers\HomeController::class, 'list_trucks'])->name('trucks');
Route::get('/drivers', [App\Http\Controllers\HomeController::class, 'list_drivers'])->name('drivers');
Route::get('/driver', [App\Http\Controllers\HomeController::class, 'driver_deta'])->name('driver_deta');
Route::get('/loads', [App\Http\Controllers\HomeController::class, 'list_loads'])->name('loads');
Route::post('submit-load', [App\Http\Controllers\HomeController::class, 'submit_load'])->name('submit_load');
Route::get('/driver_details', [App\Http\Controllers\HomeController::class, 'driver_details'])->name('driver_details');
Route::get('/carrier_details', [App\Http\Controllers\HomeController::class, 'carrier_details'])->name('carrier_details');
Route::get('/load_details/{id}', [App\Http\Controllers\HomeController::class, 'loads_details'])->name('load_details');
Route::get('/trucks_details/{id}', [App\Http\Controllers\HomeController::class, 'trucks_details'])->name('trucks_details');
Route::get('/shipper_detail/{id}', [App\Http\Controllers\HomeController::class, 'shipper_details'])->name('shipper_details');
Route::post('submit-truck', [App\Http\Controllers\HomeController::class, 'submit_truck'])->name('submit_truck');
Route::get('/Settlement', [App\Http\Controllers\HomeController::class, 'Settlement'])->name('Settlement');
Route::get('/loads_details_edit', [App\Http\Controllers\HomeController::class, 'loads_details_edit'])->name('loads_details_edit');
Route::get('/Shipper', [App\Http\Controllers\HomeController::class, 'Shipper'])->name('Shipper');
Route::post('submit-shipper', [App\Http\Controllers\HomeController::class, 'submit_shipper'])->name('submit_shipper');
Route::get('/Dispatcher', [App\Http\Controllers\HomeController::class, 'Dispatcher'])->name('Dispatcher');
Route::get('Add-Shipper', [App\Http\Controllers\HomeController::class, 'add_shipper'])->name('AddShipper');
Route::get('profit_calculator', [App\Http\Controllers\HomeController::class, 'profit_calculator'])->name('profit_calculator');
Route::get('/Sales_dispatcher_details', [App\Http\Controllers\HomeController::class, 'Sales_dispatcher_details'])->name('Sales_dispatcher_details');
Route::get('/Dedicated_dispatcher_details', [App\Http\Controllers\HomeController::class, 'Dedicated_dispatcher_details'])->name('Dedicated_dispatcher_details');
Route::get('/Independent_dispatcher_details', [App\Http\Controllers\HomeController::class, 'Independent_dispatcher_details'])->name('Independent_dispatcher_details');










