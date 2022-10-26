<?php

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

Route::get('/', function () {
    return view('welcome');
});

route::view('Registro','registro')->name('registro');
route::view('Recordatorio','recordatorio')->name('recordatorio');


Route::post('Recordatorios', [ControlaVista::class,'UsaRecordatorio'
])->name('Recordatorios.UsaRecordatorio');
