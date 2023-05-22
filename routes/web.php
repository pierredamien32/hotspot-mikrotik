<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MikrotikController;

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
    return view('welcome');
});
Route::get('/', [MikrotikController::class, 'welcome'])->name('welcome');
Route::get('/login', [MikrotikController::class, 'create'])->name('login.create');
Route::post('/login', [MikrotikController::class, 'connexionUser'])->name('login.connexionUser');

// Route::get('/status', function () {
//     return view('status');
// });
Route::get('/status', [MikrotikController::class, 'index'])->name('status');
Route::get('/users', [MikrotikController::class, 'genererUser'])->name('genererUser');

