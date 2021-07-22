<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenerateController;

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

Route::get('/products', [GenerateController::class, 'index']);

Route::get('/price-generate', [GenerateController::class, 'price_generate']);

Route::post('/pdf', [GenerateController::class, 'import_product']);

Route::delete('delete-product-list', [GenerateController::class, 'delete_product_list']);
