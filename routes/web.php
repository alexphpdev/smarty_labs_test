<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UrlShorterController;
use App\Repositories\UrlShorterRepo;

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

Route::get('url-shorter', [UrlShorterController::class, 'index']);
Route::post('url-shorter', [UrlShorterController::class, 'generateShortUrl'])->name('url-shorter-generate');
Route::get('{short_url}', 'RedirectController');
