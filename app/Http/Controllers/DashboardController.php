<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecieveFund;
use App\Models\Shopkeeper;
use App\Models\Expenses;
use App\Models\RemainingFund;

class DashboardController extends Controller
{
    public function index()
    {
        $todayFunds = RecieveFund::where('date', date('Y-m-d'))->sum('amount');
        $date = date('Y-m-d');
        $carbonDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date);
        $month = $carbonDate->format('m');
        $shopkeepers = Shopkeeper::count();
        $shopkeeper_fund = RecieveFund::where('month', $month)->sum('amount');
        $totalExpense = Expenses::whereMonth('date', $month)->sum('amount');
        $remainingamount = RemainingFund::sum('amount');
        $remainingFund = $shopkeeper_fund - $totalExpense;

        return view('admin.dashboard', get_defined_vars());
    }
}
