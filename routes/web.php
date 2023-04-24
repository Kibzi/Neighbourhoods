<?php

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

Route::view('/','welcome');
Route::view('/About','About');   
Route::view('/Neighbourhoods','Neighbourhoods');    
Route::view('/FAQs','FAQs');    
Route::view('/Login','login');  
Route::view('/signup','signup');   
Route::view('/logout','logout');
Route::view('/connection','connection');  
Route::get('/get-crime-data', [CrimeController::class, 'getCrimeData']);
Route::view('/Neighbourhoods2', 'Neighbourhoods2');
Route::view('/Neighbourhoods3', 'Neighbourhoods3');
Route::view('/Neighbourhoods4', 'Neighbourhoods4');
Route::view('/price','price');
Route::view('/Digbeth','Digbeth');
Route::view('/Bordesley','Bordesley');
Route::view('/Environments','Environments');
Route::view('/small','Small');
Route::view('/Hall','Hall');
Route::view('/Yardley','Yardley');
Route::view('/Contact','Contact');





Route::view('/population','population');
Route::view('/LCrime','LCrime');
Route::view('/Conviniences','Conviniences');



