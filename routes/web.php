<?php

use App\Http\Controllers\WorkOrderController;
use App\Http\Livewire\WorkOrders\ShowWorkOrder;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/testing', [WorkOrderController::class, 'index']);

    Route::view('/work-orders', 'work-orders.index')->name('work-orders');
    Route::view('/work-orders/create', 'work-orders.create')->name('work-orders.create');
    Route::view('/assets', 'assets.index')->name('assets');
    Route::get('/work-orders/{workOrder}',ShowWorkOrder::class);

    Route::get('/work-orders/file-upload',ShowWorkOrder::class);


    //admin section
    Route::view('/admin/user', 'admin.user')->name('admin.user');
    Route::view('/admin/task', 'admin.resources.task')->name('admin.task');
    Route::view('/admin/configuration', 'admin.configuration')->name('admin.configuration');
    Route::view('/admin/status', 'admin.resources.status')->name('admin.status');
    Route::view('/admin/priority', 'admin.resources.priority')->name('admin.priority');
    Route::view('/admin/category', 'admin.resources.category')->name('admin.category');
    Route::view('/admin/sub-category', 'admin.resources.sub-category')->name('admin.sub-category');
});
