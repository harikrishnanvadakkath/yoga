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


//     Route::prefix('participation')->name('participation')->group( function () {

//     Route::get('/',[ParticipationController::class,'index'])->name('.index');

//     Route::get('/participation/create',[ParticipationController::class,'create'])->name('.create');
    
//     Route::post('/',[ParticipationController::class,'store'])->name('.store');

//     Route::get('/{participation}',[ParticipationController::class,'show'])->name('.show');

//     Route::get('/{participation}/edit',[ParticipationController::class,'edit'])->name('.edit');

//     Route::put('/{participation}/update',[ParticipationController::class,'update'])->name('.update');

//     Route::get('/participation/{participation}',[ParticipationController::class,'destroy'])->name('.destroy');

    


// });


//     Route::prefix('competition')->name('competition')->group( function () {  

//     Route::get('/',[CompetitionController::class,'index'])->name('.index');

//     Route::get('/competition/create',[CompetitionController::class,'create'])->name('.create');

//     Route::post('/',[CompetitionController::class,'store'])->name('.store');

//     Route::get('/{competition}',[CompetitionController::class,'show'])->name('.show');

//     Route::get('/{competition}/edit',[CompetitionController::class,'edit'])->name('.edit');

// });


Route::get('login', [AuthController::class, 'index'])->name('login');  

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 

Route::get('registration', [AuthController::class, 'registration'])->name('register');

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');  

Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('asanacategory',[AuthController::class,'asanacategory'])->name('asanacategory');

    