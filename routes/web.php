<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fileupload;
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
Route::get('/form',[fileupload::class,'form']);
Route::post('/fileupload',[fileupload::class,'store']);
Route::get('/show',[fileupload::class,'show']);
Route::get('/download/{file}',[fileupload::class,'download']);
Route::get('/view/{id}',[fileupload::class,'view']);




