<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Whoops\Run;

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

     Route::prefix('participation')->name('participation')->group( function () {

     Route::get('/',[ParticipationController::class,'index']);

     Route::get('/participation/create',[Participationcontroller::class,'create']);
     
     Route::post('/',[ParticipationController::class,'store']);

     Route::get('/{participation}',[ParticipationController::class,'show']);

    

     


 });
 
 



