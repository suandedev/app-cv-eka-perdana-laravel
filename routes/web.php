<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('components.dashboard');
});

Route::resource('pembelian', \App\Http\Controllers\PembelianController::class );
Route::resource('petani', \App\Http\Controllers\PetaniController::class );
Route::resource('panen', \App\Http\Controllers\PanenController::class);
Route::resource('kind', \App\Http\Controllers\RiceKindController::class);

Route::get('x', function () {
   \App\Models\Petani::create([
       'petani_name' => 'wayan x',
   ]);
});Route::get('y', function () {
   \App\Models\Panen::create([
       'petani_id' => 1,
       'rice_kind_id' => 1,
       'weight' => 91,
   ]);
});
Route::get('c', function () {
    $data['petanis'] = \App\Models\Petani::find(1)->panens;
   return view('components.x-test', $data);
});
