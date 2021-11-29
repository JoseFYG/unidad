<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HermanoController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/*Route::group(['middleware' => ['auth', 'verified']], function () {
    // User & Profile...
    Route::get('/user/profile', [UserProfileController::class, 'show'])
                ->name('profile.show');

    Route::get('/hermanos', [HermanoController::class, 'index'])->name('hermanos.index');
    Route::get('/hermanos/create', [HermanoController::class, 'create'])->name('hermanos.create');
    Route::get('/hermanos/{hermano}/edit', [HermanoController::class, 'edit'])->name('hermanos.edit');
    Route::get('/hermanos/{hermano}', [HermanoController::class, 'show'])->name('hermanos.show');

    Route::get('/cuotas', [CuotaController::class, 'index'])->name('cuotas.index');
    Route::get('/cuotas/create', [CuotaController::class, 'create'])->name('cuotas.create');
    Route::get('/cuotas/{cuota}/edit', [CuotaController::class, 'edit'])->name('cuotas.edit');
});*/

require_once __DIR__ . '/jetstream.php';

Route::resource('users', '\App\Http\Controllers\UserController');
Route::resource('hermanos', '\App\Http\Controllers\HermanoController');
Route::resource('cuotas', '\App\Http\Controllers\CuotaController');
Route::resource('donativos', '\App\Http\Controllers\DonativoController');
