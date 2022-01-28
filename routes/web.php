<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
use App\Models\Evento;
use GuzzleHttp\Middleware;
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
    $eventos = Evento::all();
    return view('welcome',compact('eventos'));
})->name('welcome');

Route::get('/gallery', function () {  
    return view('gallery');
})->name('gallery');

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('wwa');

Route::get('/nuestros-servicios', function () {
    return view('nuestros-servicios');
})->name('nuestros-servicios');

Route::get('/protocolos-covid19', function () {
    return view('protocolos-covid19');
})->name('protocolos-covid19');


Route::resource('/eventos', EventosController::class);

Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
});
