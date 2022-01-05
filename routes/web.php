<?php

use App\Http\Controllers\siteController as site;
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
    return view('login');
});

Route::post('/checkLogin',[site::class,'checkLogin']);
Route::get('/home',[site::class,'login']);
Route::get('/addDoctor',[site::class,'addDoctor']);
Route::post('/insertDoctor',[site::class,'insertDoctor']);
Route::get('/addSpesialis', [site::class, 'addSpesialis']);
Route::post('/insertSpesialis', [site::class, 'insertSpesialis']);
Route::prefix('/{idSpesialis}')->group(function () {
    Route::get('/deleteSpesialis', [site::class, 'deleteSpesialis']);
});
Route::prefix('/{idDokter}')->group(function () {
    Route::get('/editDokter', [site::class, 'EditDokter']);
});
