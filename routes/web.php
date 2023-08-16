<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodAdminController;
use App\Http\Controllers\HallAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('user.index');
});

//User
Route::controller(UserController::class)->group(function(){
    Route::get('/','userIndex')->name('index_user');
    Route::get('/menu','Menu')->name('menu_user');
    Route::get('/hall','Hall')->name('hall_user');

    Route::get('/hall/tableA', 'tableA')->name('tableA');
    Route::get('/hall/tableB', 'tableB')->name('tableB');
    Route::get('/hall/tableC', 'tableC')->name('tableC');

    Route::post('/foodStore', 'storeFood')->name('food_user_store');
    Route::get('/food_order/{id}', 'editOrderFood')->name('food_order');
    Route::get('/reservation', 'reservation')->name('reservation');
    Route::post('/reservation_store' , 'reservation_store')->name('reservation_store');
   
});



//Admin
Route::controller(AdminController::class)->group(function(){
    Route::get('/logout', 'destroy')->name('admin.logout');
    
});

//AdminFood
Route::controller(FoodAdminController::class)->group(function(){
    Route::get('/food_all', 'foodAll')->name('food_all');
    Route::get('/food_insert', 'foodInsert')->name('food_insert');
    Route::post('/food_store', 'foodStore')->name('food_store');
    Route::get('/food_edit/{id}', 'foodEdit')->name('food_edit');
    Route::post('/food_update/{id}', 'foodUpdate') ->name('food_update');
    Route::get('/food_delete/{id}','foodDelete')->name('foodDelete');
});


// HallAdminController

Route::controller(HallAdminController::class)->group(function(){
    Route::get('/hall_management', 'hall_management')->name('hall_management');
    Route::get('/hall_delete/{id}', 'hall_delete')->name('hall_delete');
});








Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
