<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Crudcontroller;


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

Route::get('/', function () {
  return view('home');
});

Route::get('/login', function () {
  return view('login');
});

Route::get('/checkin', function () {
  return view('checkin');
});
Route::get('/checkout', function () {
  return view('checkout');
});

Route::get('/show',[Crudcontroller::class,'showdata']);
Route::get('/add-data',[Crudcontroller::class,'adddata']);
Route::post('/store-data',[Crudcontroller::class,'storedata']);
Route::get('/edit-data/{id}',[Crudcontroller::class,'editdata']);
Route::post('/update-data/{id}',[Crudcontroller::class,'updatedata']);
Route::get('/delete-data/{id}',[Crudcontroller::class,'deletedata']);

Route::post('/login',[Crudcontroller::class,'login']);
Route::get('/records/{id}',[Crudcontroller::class,'Datarecord']);

// Route::get('/checkin',[Crudcontroller::class,'checkin']);
