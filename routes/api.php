<?php

use App\Http\Controllers\PengeluaranController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pengeluaran', 'PengeluaranController@index')->name('pengeluaran.api');
Route::get('/index', 'PengeluaranController@indexs')->name('pengeluaran.index');
Route::post('pengeluaran', 'PengeluaranController@create')->name('pengeluaran.post');
Route::put('/pengeluaran/{id}', 'PengeluaranController@update')->name('pengeluaran.update');
Route::delete('/pengeluaran/{id}', 'PengeluaranController@delete')->name('pengeluaran.delete');

Route::get('/create', [PengeluaranController::class,'add'])->name('pengeluaran.create');
Route::get('/edit/{pengeluaran:id}',[PengeluaranController::class,'edit'])->name('pengeluaran.edit');
