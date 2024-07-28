<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/category_wise_elements/{slug}', [ApiController::class, 'category_wise_elements']);

Route::get('/product_wise_packages/{slug}', [ApiController::class, 'product_wise_packages']);

Route::get('/saas_company_check/{slug}', [ApiController::class, 'saas_company_check']);

Route::get('/elements/laravel-themes', [ApiController::class, 'list']);
