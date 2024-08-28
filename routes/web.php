<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShofyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SslCommerzPaymentController;

//Route::get('/', function () {
////    return view('welcome');
////});

Route::get('/',[ShofyController::class,'index'])->name('home');
Route::get('/shop/{id}',[ShofyController::class,'product'])->name('shop');
Route::get('/products',[ShofyController::class,'shop'])->name('shop-all');
Route::get('/sub-category-shop/{id}',[ShofyController::class,'subCategoryProduct'])->name('sub-category-shop');
Route::get('/product/detail/{id}/{slug}',[ShofyController::class,'productDetail'])->name('product.details');
Route::resources(['cart'=>CartController::class]);


Route::get('/customer/login',[CustomerController::class,'login'])->name('customer.login');
Route::post('/customer/login',[CustomerController::class,'loginCheck'])->name('customer.login');
Route::get('/customer/logout',[CustomerController::class,'logout'])->name('customer.logout');

Route::get('/customer/register',[CustomerController::class,'register'])->name('customer.register');
Route::post('/customer/register',[CustomerController::class,'saveNewCustomer'])->name('customer.register');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout');
Route::post('/new-order',[CheckoutController::class,'newOrder'])->name('new-order');
Route::get('/complete-order',[CheckoutController::class,'completeOrder'])->name('complete-order');

Route::get('/customer/dashboard',[CustomerDashboardController::class,'index'])->name('customer.dashboard')->middleware('customer');
Route::get('/customer/profile',[CustomerDashboardController::class,'profile'])->name('customer.profile')->middleware('customer');
Route::post('/customer/update/{id}',[CustomerDashboardController::class,'update'])->name('customer.update')->middleware('customer');
Route::get('/customer/order',[CustomerDashboardController::class,'order'])->name('customer.order')->middleware('customer');
Route::get('/customer/dashboard/logout',[CustomerDashboardController::class,'dashboardLogout'])->name('customer-dashboard-logout')->middleware('customer');
Route::get('/customer/change-password', [CustomerDashboardController::class, 'ChangePasswordForm'])->name('customer.change-password')->middleware('customer');
Route::post('/customer/change-password', [CustomerDashboardController::class, 'updatePassword'])->name('customer.update-password')->middleware('customer');
Route::get('/customer/show/{id}',[CustomerDashboardController::class,'show'])->name('show');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resources(['category'=>CategoryController::class]);
    Route::resources(['sub-category'=>SubCategoryController::class]);
    Route::resources(['brand'=>BrandController::class]);
    Route::resources(['color'=>ColorController::class]);
    Route::resources(['size'=>SizeController::class]);
    Route::resources(['unit'=>UnitController::class]);
    Route::resources(['product'=>ProductController::class]);
    Route::resources(['user'=>UserController::class]);
    Route::resources(['courier'=>CourierController::class]);

    Route::get('/order',[OrderController::class,'index'])->name('order');
    Route::get('/order/detail/{id}',[OrderController::class,'detail'])->name('order.detail');
    Route::get('/order/edit/{id}',[OrderController::class,'edit'])->name('order.edit');
    Route::post('/order/update/{id}',[OrderController::class,'update'])->name('order.update');
    Route::post('/order/destroy/{id}',[OrderController::class,'destroy'])->name('order.destroy');

});
