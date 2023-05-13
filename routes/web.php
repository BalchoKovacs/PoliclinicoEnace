<?php

use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
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
    $data=Cliente::all()->first();
    dd($data);
    return view('home',compact('data'));
});
