<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/


Route::view('/', 'welcome')->name('wel');

Route::controller(ControladorVista::class)->group(
    function () {
        Route::get('Formulario', 'showFormulario')->name('for');
        Route::get('Tabla', 'showTabla')->name('tab');
    }
);

Route::post('guardarFormulario', [ControladorVista::class, 'procesarFormulario'])->name('SaveMem');