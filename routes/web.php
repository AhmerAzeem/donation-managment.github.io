<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopkeeperController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AccountController;
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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/shopkeepers', [ShopkeeperController::class, 'index'])->name('manage.shopkeepers');


Route::get('/add-shopkeeper', function () {
    return view('admin.shopkeepers.add-shopkeeper');
})->name('add.shopkeeper');


Route::post('/create', [ShopkeeperController::class, 'store']);

Route::get('/deactivate/{id}', [ShopkeeperController::class, 'deactivate']);

Route::get('/activate/{id}', [ShopkeeperController::class, 'activate']);

Route::get('/getedit-shopkeeper/{id}', [ShopkeeperController::class, 'edit'])->name('getedit.shopkeeper');

Route::get('/get-shopkeeper', [InputController::class, 'getShopkeeper'])->name('get.shopkeeper');

Route::post('/edit-shopkeeper', [ShopkeeperController::class, 'update'])->name('edit.shopkeeper');

Route::get('/get-data', [ShopkeeperController::class, 'shopkeepersIndex'])->name('shopkeepers.index');

Route::get('/getfundsdata', [FundController::class, 'todayFunds'])->name('today.funds');



Route::get('/fund', function () {
    return view('admin.funds.generatefund');
})->name('generate.fund');


Route::post('/generatefund', [FundController::class, 'generate'])->name("fund.generate");

Route::get('getdata', [FundController::class, 'getData'])->name('getfund.data');

Route::get('recieve', [FundController::class, 'receiveFund'])->name('recieve.fund');


Route::get('accounts', [AccountController::class, 'index'])->name('manage.account');
Route::get('add-account', [AccountController::class, 'create'])->name('add.account');

Route::get('expenses', function () {
    return view('admin.expenses.expenses');
})->name('expenses');


require __DIR__ . '/auth.php';
