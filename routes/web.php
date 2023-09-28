<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopkeeperController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\CategoryController;
use App\Models\RecieveFund;
use App\Models\Shopkeeper;
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


Route::group(['prefix' => 'head-admin'], function () {
    Route::get('/', function () {
        return view('admin.auth.login');
    });

    Route::get('dashboard', function () {
        $todayFunds = RecieveFund::where('date', date('Y-m-d'))->sum('amount');
        $shopkeepers = Shopkeeper::count();
        return view('admin.dashboard', get_defined_vars());
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::as('profile.')->middleware('auth')->group(function () {
        Route::get('profile', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('profile', [ProfileController::class, 'update'])->name('update');
        Route::delete('profile', [ProfileController::class, 'destroy'])->name('destroy');
    });


    /*Start: Loading Shopkeepers Routes*/
    /*Supliment Resource Routes*/
    Route::prefix('shopkeepers')
        ->as('shopkeepers.')
        ->controller(ShopkeeperController::class)
        ->group(function () {
            Route::get('shopkeeper/{id}', 'status')->name('status');
        });
    Route::resource('shopkeepers', ShopkeeperController::class);
    /*End: Loading Shopkeepers Routes*/




    Route::get('fund', function () {
        return view('admin.funds.generatefund');
    })->name('generate.fund');


    Route::post('generatefund', [FundController::class, 'generate'])->name("fund.generate");

    Route::get('getdata', [FundController::class, 'getData'])->name('getfund.data');

    Route::get('recieve', [FundController::class, 'receiveFund'])->name('recieve.fund');


    Route::get('accounts', [AccountController::class, 'index'])->name('manage.account');
    Route::get('add-account', [AccountController::class, 'create'])->name('add.account');
    Route::get('account-status/{id}', [AccountController::class, 'status'])->name('account.status');
    Route::get('get-accounts', [AccountController::class, 'getAccounts'])->name('account.index');
    Route::get('ledger', [AccountController::class, 'searchAccount'])->name('search.account');
    Route::get('categories', [CategoryController::class, 'index'])->name('manage.categories');
    Route::get('add-categories', [CategoryController::class, 'create'])->name('add.category');
    Route::get('get-categories', [CategoryController::class, 'getData'])->name('get.category');
    Route::get('category-status{id}', [CategoryController::class, 'statusupdate'])->name('category.status');
    Route::get('add-expensedata', [ExpenseController::class, 'saveData'])->name('addexpenses.data');
    Route::get('add-expenses', [ExpenseController::class, 'addExpenses'])->name('add.expenses');
    Route::get('search-ledger', [ExpenseController::class, 'searchExpenses'])->name('search.ledger');

    Route::get('expenses', function () {
        return view('admin.expenses.expenses');
    })->name('expenses');
});


require __DIR__ . '/auth.php';
