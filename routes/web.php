<?php

use Spatie\FlareClient\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('dashboard');
});

Route::get('/dashboard', [CustomerController::class, 'index'])->name('dashboard');

// Route::get('/laundry', [CustomerController::class, 'index'])->name('laundry');

Route::get('/createorder', [CustomerController::class, 'createorder'])->name('createorder');
Route::post('/insertdata', [CustomerController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkandata/{id}', [CustomerController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [CustomerController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('delete');

Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('edit');


