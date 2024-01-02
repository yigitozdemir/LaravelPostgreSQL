<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostgreSQL;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/PostgreSQL/Version', [PostgreSQL::class, 'version']);
Route::get('/PostgreSQL/History', [PostgreSQL::class, 'queryHistory']);
