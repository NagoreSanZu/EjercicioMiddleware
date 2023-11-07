<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\BeforeLog;
use App\Http\Middleware\AfterLog;

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

Route::get('/test', function () {
    return "Esta es la ruta que se registrará en el log.";
})->middleware([BeforeLog::class,AfterLog::class]);
