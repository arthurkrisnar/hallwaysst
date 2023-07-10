<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\loginController;
Use App\Http\Controllers\registerController;
Use App\Http\Controllers\tenantController;
Use App\Http\Controllers\custController;

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

// Route::get('/', function () {
//     return view('User.main');
// });

Route::get('/', [custController::class, 'show_main']);
Route::post('/order/{id_cart_integer}/post', [custController::class, 'post_main']);
Route::get('/order/{id_cart_integer}', [custController::class, 'get_all_tenant']);

// Route::get('/menu/foods', function () {
//     return view('User.menu-foods');
// });

Route::get('/order/{id_cart}/foods/{id_tenant}', [custController::class, 'show_tenant_foods']);
Route::get('/order/{id_cart}/drinks/{id_tenant}', [custController::class, 'show_tenant_drinks']);

Route::get('/pesanan', function () {
    return view('User.pesanan');
});

Route::get('/pesanan/{id_cart_integer}', [custController::class, 'show_pesanan_paid']);

route::post('/order/{id_cart_integer}/search/tenant/result', [custController::class, 'post_search_tenant']);
route::post('/order/{id_cart_integer}/search/food/{id_tenant}/result', [custController::class, 'post_search_food']);
route::post('/order/{id_cart_integer}/search/drink/{id_tenant}/result', [custController::class, 'post_search_drink']);



Route::get('/pemesanan/konfirmasi/pembayaran', function () {
    return view('User.pembayaran');
});

Route::post('/order/{id_cart_integer}/{id_tenant}/pembayaran', [custController::class, 'post_pembayaran']);
Route::get('/order/{id_cart_integer}/cart/{id_tenant}/pembayaran', [custController::class, 'get_pembayaran']);

Route::post('/order/{id_cart_integer}/cart/{id_tenant}/pembayaran/update', [custController::class, 'update_status']);
Route::get('/order/{id_cart_integer}/cart/{id_tenant}/pembayaran/metode', [custController::class, 'get_metode']);

Route::get('/pesanan/{id_cart_integer}', [custController::class, 'get_pesanan']);

Route::get('/order/{id_cart}/cart/{id_tenant}', [custController::class, 'show_cart']);
//Route::get('/menu/cart/{id_tenant}', [custController::class, 'delete_cart_menu']);
Route::post('/order/{id_cart}/{id_tenant}', [custController::class, 'add_cart']);

Route::get('/tenant', [loginController::class, 'loginTenant'])->name('login');
Route::post('/tenant', [loginController::class, 'authTenant']);
Route::get('/tenant/logout', [loginController::class, 'logoutTenant']);
Route::get('/tenant/registrasi', [registerController::class, 'registTenant']);
Route::post('/tenant/registrasi', [registerController::class, 'postRegistTenant']);

Route::get('/tenant/menu', [tenantController::class, 'menuTenant'])->middleware('auth');
Route::post('/tenant/menu', [tenantController::class, 'PostMenuTenant'])->middleware('auth');

Route::get('/tenant/pesanan', [tenantController::class, 'show_pesanan'])->middleware('auth');
Route::post('/tenant/pesanan/update', [tenantController::class, 'end_pesanan'])->middleware('auth');
Route::get('/tenant/profile', [tenantController::class, 'show_profile'])->middleware('auth');
Route::get('/tenant/laporan', [tenantController::class, 'laporan_penjualan'])->middleware('auth');

Route::post('/tenant/laporan/filter', [tenantController::class, 'filter_laporan_penjualan'])->middleware('auth');

Route::post('/tenant/menu/edit', [tenantController::class, 'editMenuTenant'])->middleware('auth');
Route::post('/tenant/menu/delete/{userId}', [tenantController::class, 'deleteMenu'])->middleware('auth');
//

// Route::get('/tenant/menu', function () {
//     return view('Tenant.menu');
// });

// Route::get('/tenant/pesanan', function () {
//     return view('Tenant.pesanan');
// });

// Route::get('/tenant/laporan', function () {
//     return view('Tenant.laporan');
// });

// Route::get('/tenant/profile', function () {
//     return view('Tenant.profile');
// });

Route::get('/admin', function () {
    return view('Admin.login');
});