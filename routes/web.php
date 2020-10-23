<?php

use App\Constants\OrderStatus;
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

Route::get('/carrito/{id}', function ($id) {
    $order = \App\Models\Order::find($id);
    return view('paymate.create', compact('order'));
});

Route::get('/order/{id}', function($id) {
    $order = \App\Models\Order::with('details.product')->find($id)->toJson();
    $statuses = OrderStatus::STATUSES;
    return view('orders.show', compact('order', 'statuses'));
});
