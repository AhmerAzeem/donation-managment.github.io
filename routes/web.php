<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopkeeperController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExpenseController;
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

Route::get('/', [ExpenseController::class, 'index'])->name('home');
Route::get('/get-expense', [ExpenseController::class, 'getExpenses'])->name('get.expenses');

Route::get('head-admin/', function () {
    return view('admin.auth.login');
});

Route::get('head-admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('head-admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('head-admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('head-admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('head-admin/shopkeepers', [ShopkeeperController::class, 'index'])->name('manage.shopkeepers');


Route::get('head-admin/add-shopkeeper', function () {
    return view('admin.shopkeepers.add-shopkeeper');
})->name('add.shopkeeper');


Route::post('head-admin/create', [ShopkeeperController::class, 'store']);

Route::get('head-admin/shopkeeper-status/{id}', [ShopkeeperController::class, 'status'])->name('shopkeeper.status');

Route::get('head-admin/getedit-shopkeeper/{id}', [ShopkeeperController::class, 'edit'])->name('getedit.shopkeeper');

Route::get('head-admin/get-shopkeeper', [InputController::class, 'getShopkeeper'])->name('get.shopkeeper');

Route::post('head-admin/edit-shopkeeper', [ShopkeeperController::class, 'update'])->name('edit.shopkeeper');

Route::get('head-admin/get-data', [ShopkeeperController::class, 'shopkeepersIndex'])->name('shopkeepers.index');

Route::get('head-admin/getfundsdata', [FundController::class, 'todayFunds'])->name('today.funds');



Route::get('head-admin/fund', function () {
    return view('admin.funds.generatefund');
})->name('generate.fund');


Route::post('head-admin/generatefund', [FundController::class, 'generate'])->name("fund.generate");

Route::get('head-admin/getdata', [FundController::class, 'getData'])->name('getfund.data');

Route::get('head-admin/recieve', [FundController::class, 'receiveFund'])->name('recieve.fund');


Route::get('head-admin/accounts', [AccountController::class, 'index'])->name('manage.account');
Route::get('head-admin/add-account', [AccountController::class, 'create'])->name('add.account');
Route::get('head-admin/account-status/{id}', [AccountController::class, 'status'])->name('account.status');
Route::get('head-admin/get-accounts', [AccountController::class, 'getAccounts'])->name('account.index');
Route::get('head-admin/ledger', [AccountController::class, 'searchAccount'])->name('search.account');
Route::get('head-admin/add-expensedata', [ExpenseController::class, 'saveData'])->name('addexpenses.data');
Route::get('head-admin/add-expenses', [ExpenseController::class, 'addExpenses'])->name('add.expenses');
Route::get('head-admin/search-ledger', [ExpenseController::class, 'searchExpenses'])->name('search.ledger');

Route::get('head-admin/expenses', function () {
    return view('admin.expenses.expenses');
})->name('expenses');


require __DIR__ . '/auth.php';
