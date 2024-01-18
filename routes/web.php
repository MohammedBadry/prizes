<?php

use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Admin\Users;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\WithdrawController;
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
    return redirect('login');
});

	Route::group(['middleware' => ['auth', 'admin']], function () {
		Route::get('/dashboard', [Dashboard::class, 'home'])->name('dashboard');

        Route::resource('users', Users::class);
		Route::post('/users/save/import', [Users::class, 'import'])->name('users.import');
        Route::get('/winners', [Users::class, 'winners'])->name('winners.index');
        Route::get('winners/export/', [Users::class, 'winnersExport'])->name('winners.export');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('/withdraw', [WithdrawController::class, 'index'])->name('withdraw.index');
        Route::post('/check-winner', [WithdrawController::class, 'checkWinner']);
        Route::post('/get-winner/{mobile}', [WithdrawController::class, 'getWinner']);
        Route::post('/update-time-seetings/{time}', [WithdrawController::class, 'updateTimeSeetings']);

    });

require __DIR__.'/auth.php';
