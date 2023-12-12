<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use Illuminate\Http\Request;
use App\Models\Expenses;
use App\Models\RecieveFund;
use App\Models\RemainingFund;


class ExpenseController extends Controller
{

    public function index()
    {

        return view('index');
    }

    public function getExpenses()
    {
        $currentDate = date('Y-m-d');
        list($year, $month, $day) = explode('-', $currentDate);

        // Query expenses for the current year and month
        $expenses = Expenses::whereYear('date', $year)
            ->whereMonth('date', $month)
            ->get();

        $output = "";

        if ($expenses->isNotEmpty()) { // Check if expenses were found
            foreach ($expenses as $expense) {
                $account = Accounts::find($expense->account);

                if ($account) {
                    $accountName = $account->name;

                    // Format the expense data into an HTML table row
                    $output .= '<tr class="row100 body">
                    <td class="cell100 column1">1</td>
                    <td class="cell100 column2">' . $expense->narration . '</td>
                    <td class="cell100 column3">' . $accountName . '</td>
                    <td class="cell100 column4">' . $expense->date . '</td>
                    <td class="cell100 column5">' . $expense->amount . '</td>
                </tr>';
                } else {
                    $output .= "<p class='text-danger'>Account Not Found</p>";
                }
            }
        } else {
            $output .= '<p class="text-danger">Expenses not found</p>';
        }

        return response()->json($output);
    }

    public function saveData(Request $request)
    {
        $requestData = $request->input('formData');
        $accountid = $requestData['accountid'];

        $account = Accounts::where('id', $accountid)->first();

        if ($account) {
            $accountname = $account->name;

            $rowNumber = $requestData['rowNumber']; // Get the row number from the client

            $output = "<tr>
            <td>" . $rowNumber . "</td>
            <td>" . $accountname . "
            <input type='hidden' name='accountid' class='form-control' id='accountid' value='" . $requestData['accountid'] . "'></td>
            <td>" . $requestData['date'] . "
            <input type='hidden' name='date' class='form-control' id='date' value='" . $requestData['date'] . "'></td>
            <td>" . $requestData['amount'] . "
            <input type='hidden' name='amount' class='form-control' id='amount' value='" . $requestData['amount'] . "'></td>
            <td>" . $requestData['narration'] . "
            <input type='hidden' name='narration' class='form-control' id='narration' value='" . $requestData['narration'] . "'></td>
            <td>" . $requestData['billno'] . "
            <input type='hidden' name='billno' class='form-control' id='billno' value='" . $requestData['billno'] . "'></td>
            <td><button type='button' data-account='" . $accountid . "' data-date='" . $requestData['date'] . "' data-amount='" . $requestData['amount'] . "' data-narration='" . $requestData['narration'] . "' data-bill='" . $requestData['billno'] . "' class='btn btn-primary editexpense_btn'>Edit</button></td>
        </tr>";

            return $output;
        } else {
            return "Account not found";
        }
    }

    public function addExpenses(Request $request)
    {
        $requestData = $request->input('formData');

        $expenses = [];

        $date = date('Y-m-d');
        $carbonMonth = \Carbon\Carbon::createFromFormat('Y-m-d', $date);
        $todayMonth = $carbonMonth->format('m');

        foreach ($requestData as $data) {

            $expense = Expenses::create([
                'account' => $data['accountid'],
                'narration' => $data['narration'],
                'amount' => $data['amount'],
                'date' => $data['date'],
                'month' => $todayMonth,
            ]);

            if (isset($data['billno']) && !empty($data['billno'])) {
                $expense->bill_no = $data['billno'];
                $expense->save();
            }

            $carbonDate = \Carbon\Carbon::createFromFormat('Y-m-d', $data['date']);
            $month = $carbonDate->format('m');

            $recievedFund = RecieveFund::where('month',  $month)->sum('amount');

            $thisMonthExpense = Expenses::where('month', $month)->sum('amount');

            $remainingFund = $recievedFund - $thisMonthExpense;

            $checkRemainingFund = RemainingFund::where('month', $month)->first();

            if (!empty($checkRemainingFund)) {
                RemainingFund::where('month', $month)->update(['amount' => $remainingFund]);
            } else {
                $createRemainingFund = RemainingFund::create([
                    'date' => $date,
                    'amount' => $remainingFund,
                    'month' => $month,
                ]);
            }
        }
        return "Expense Added successfully";
    }

    public function searchExpenses(Request $request)
    {
        $expenses = Expenses::where('account', $request->account)
            ->whereBetween('date', [$request->fromdate, $request->todate])
            ->get();

        $rowNumber = $request->rowNumber;

        $output = '';
        if ($expenses->count() > 0) {
            foreach ($expenses as $expense) {
                $output .= "<tr>
                <td>" . $rowNumber . "</td>
                <td>" . $expense->narration . "</td>
                <td>" . $expense->account . "</td>
                <td>" . $expense->date . "</td>
                <td>" . $expense->amount . "</td>
                <td>" . $expense->bill_no . "</td>
            </tr>";
            }
        } else {
            $output .= "<p class='text-danger'>You dont have any Expense</p>";
        }
        return $output;
    }
}
