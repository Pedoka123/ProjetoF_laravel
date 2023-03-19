<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\OsController;
use  App\Http\Controllers\SistemaController;

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

Route::get('/',[ SistemaController::class, 'welcome' ]);



Route::get('/sobre',[ SistemaController::class, 'sobre' ]);


Route::get('/servicos', [ SistemaController::class, 'servicos' ]);


