<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\dataController;





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
    return view('index');
});

// Route ini akan mengarahkan ke halaman login
// url: yang akhiranya adalah /loginpage akan diarahkan ke halaman login
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::get('/barchart/Data', function(){
    $data = DB::table('data_bimbingan')->get();
    return response()->json($data);

});
Route::resource("data_bimbingan", App\Http\Controllers\dataController::class);

Route::get('/barchart', function(){
    return view('koordinator.barchart');
});
// Jika session login tidak ada maka akan diarahkan ke halaman login page dan jika ada maka akan diarahkan ke halaman dashboard
Route::get('/dashboard', [PagesController::class, 'dashboard'])->middleware('auth');

// Route ini akan mengarahkan ke halaman logout
Route::get('/logout', [LoginController::class, 'destroy']);

Route::get('/barchart/Data', function(){
    $data = DB::table('data_bimbingan')->get();
    return response()->json($data);
});

Route::get('/barchart', function(){
    return view('koordinator.barchart');
});

// Route::resource("data_bimbingan", App\Http\Controllers\dataController::class);
