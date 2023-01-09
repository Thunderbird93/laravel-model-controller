<?php

use App\Http\Controllers\Guest\PageController;
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

Route::get(uri: '/', action: [PageController::class, 'index'])->name(name:'home');

Route::get(uri: '/chi-siamo', action: [PageController::class, 'about'])->name(name: 'about');

Route::get('/elenco', [PageController::class, 'elenco'])->name('elenco');
