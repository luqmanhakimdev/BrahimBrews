<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Models\CabFlavor;
use App\Models\User;
use App\Models\Agent;

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
Route::get('/logout', function () {
    return redirect('login');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/agent', [AppController::class, 'AllAgent'],)->name('agent');
Route::middleware(['auth:sanctum', 'verified'])->get('/addagentpage', [AppController::class, 'AddAgentPage'],)->name('add.agent.page');
Route::middleware(['auth:sanctum', 'verified'])->post('/addagent', [AppController::class, 'AddAgent'],)->name('add.agent');

Route::middleware(['auth:sanctum', 'verified'])->post('/updatestock', [AppController::class, 'UpdateStock'],)->name('update.stock');
Route::middleware(['auth:sanctum', 'verified'])->post('/updateagent', [AppController::class, 'UpdateAgent'],)->name('update.agent');

Route::middleware(['auth:sanctum', 'verified'])->put('/addflavor', [AppController::class, 'AddFlavor'],)->name('add.flavor');
Route::middleware(['auth:sanctum', 'verified'])->get('/stockerror', [AppController::class, 'UpdateStock'],)->name('stockerror');
Route::middleware(['auth:sanctum', 'verified'])->get('/delete/flavor/{id}', [AppController::class, 'DeleteFlavor'],)->name('delete.flavor');
Route::middleware(['auth:sanctum', 'verified'])->get('/delete/agent/{id}', [AppController::class, 'DeleteAgent'],)->name('delete.agent');

Route::middleware(['auth:sanctum', 'verified'])->get('/vaccinemalaysia', [AppController::class, 'vaccineApi'],)->name('vaccineapi');


Route::get('/search', [AppController::class, 'SearchAgent'],)->name('search.agent');
Route::get('/search/details', [AppController::class, 'searchlive'],)->name('search');









Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $flavors = CabFlavor::all();     //nama table dari DB. Kena initialise dalam Model. Tgk model apa kau pakai.
    return view('dashboard', compact('flavors')); //masuk dari atas nama table '$flavors'.
})->name('dashboard');




