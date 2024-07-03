<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ContactController;

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
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');
Route::get('/', [HomeController::class, 'index']);
Route::get('/products', [AdminController::class, 'product'])->name('products_admin_page');
Route::get('/products_user', [HomeController::class, 'product']);
Route::get('/add_service', [AddController::class, 'open']);
Route::post('/products_store', [AddController::class, 'store'])->name('products.store');
Route::get('/delete_service', [DeleteController::class, 'delete']);
Route::get('/open_edit_service', [EditController::class, 'open']);
Route::post('/products.edit', [EditController::class, 'edit'])->name('products.edit');
Route::get('/open_contact', [ContactController::class, 'index'])->name('open.contact');
Route::post('/message', [ContactController::class, 'contact']);
Route::get('/open_messages', [AdminController::class, 'message']);
Route::get('/open_orders', [AdminController::class, 'order']);
Route::get('/open_users', [AdminController::class, 'user']);
Route::post('/add.cart', [CartController::class, 'add'])->name('add.cart')->middleware('auth');
Route::get('/cart_page', [CartController::class, 'open'])->name('open.cart')->middleware('auth');
Route::get('/delete_cart', [CartController::class, 'delete'])->name('delete.cart')->middleware('auth');
Route::get('/about_user', [HomeController::class, 'about']);
Route::get('/buy', [SaleController::class, 'add']);
Route::get('/view_product', [HomeController::class, 'product_page']);