<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Models\Flavor;
use App\Models\User;

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
    return redirect('login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $flavors = Flavor::all(); //nama table dari DB. Kena initialise dalam Model. Tgk model apa kau pakai.
    return view('dashboard', compact('flavors')); //masuk dari atas nama table '$flavors'.
})->name('dashboard');




