<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecieveFund;
use App\Models\Shopkeeper;
use App\Models\Expenses;
use App\Models\RemainingFund;
use App\Models\Fund;

class DashboardController extends Controller
{
    public function index()
    {
        $todayFunds = RecieveFund::where('date', date('Y-m-d'))->sum('amount');
        $date = date('Y-m-d');
        $carbonDate = \Carbon\Carbon::createFromFormat('Y-m-d', $date);
        $month = $carbonDate->format('m');
        $shopkeepers = Shopkeeper::where('status', 'Active')->count();
        // $shopkeeper_fund = RecieveFund::where('month', 11)->sum('amount');
        // $shopkeeper_fund = RecieveFund::where('month', 11)->sum('amount');
        // $shopkeeper_fund = 57400;
        // $shopkeeper_fund = Shopkeeper::where('month', 11)->sum('amount');
        $shopkeeper_fund = Shopkeeper::where('status', 'Active')->sum('amount');
        // $totalExpense = Expenses::whereMonth('date', 10)->sum('amount');
        $totalExpense = 0;
        // $totalExpense = 42500;
        $remainingamount = RemainingFund::where('month', 'total_amount')->first();

        // $totalRemainingFund = $remainingamount->amount;

        // $remainingFund = 29090;
        $remainingFund = 17590;

        $totalFund = $remainingFund + $shopkeeper_fund;



        $totalRemainingFund = $remainingFund + $shopkeeper_fund - $totalExpense;
        // $remainingFund = $remainingamount->amount - $totalExpense;

        return view('admin.dashboard', get_defined_vars());
    }
}
