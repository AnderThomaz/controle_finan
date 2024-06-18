<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

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


Route::resource('produtos', ProdutoController::class);




//Route::group([
//    'prefix' => 'admin',
//    'as' => 'admin.'
//], function(){
//
//    Route::get('deshborad', function(){
//        return "deshborad";
//    })->name('deshbord');
//    
//    Route::get('users', function(){
//        return "users";
//    })->name('users');
//
//    Route::get('cliente', function(){
//        return "cliente";
//    })->name('cliente');
//
//    
//    
//    
//});
//
