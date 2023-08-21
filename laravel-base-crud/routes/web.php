<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\Homecontroller as GuestHomeController;
use App\Http\Controllers\Guest\LidoController as GuestLidoController;
use App\Http\Controllers\Admin\LidoController as AdminLidoController;


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

Route::get('/', [GuestHomeController::class, 'home'])->name('homepage');

//Route::resource('guest/lidi', GuestLidoController::class);
Route::get('guest/lidi', [GuestLidoController::class, 'index' ])->name('guestIndex');
Route::get('guest/lidi/{id}', [GuestLidoController::class, 'show'])->name('guestShow');

Route::prefix('admin')->group(function () {
    Route::resource('lidi', AdminLidoController::class);
<<<<<<< HEAD
});
//trial simona_dev to check out if it is working
=======
});
>>>>>>> start-to-add-delete-section
