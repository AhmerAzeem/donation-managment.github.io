<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fund;
use App\Models\Shopkeeper;
use App\Models\RecieveFund;
use Illuminate\Support\Carbon;

class FundController extends Controller
{
    public function todayFunds()
    {
        $date = date('Y-m-d');

        $todayFunds = RecieveFund::where('date', $date)->sum('amount');

        return $todayFunds;
    }


    public function generate(Request $request)
    {
        $shopkeepers = Shopkeeper::where(['status' => 'active'])->get();

        if ($request->generate == 'forall') {
            if ($request->month == '0') {
                return redirect()->back()->with('month', 'Month field is required');
            } elseif ($request->year == '0') {
                return redirect()->back()->with('year', 'Year field is required');
            }

            $validated = $request->validate([
                'amount' => 'required',
            ], [
                'amount.required' => 'Amount field is required.',

            ]);



            $successMessage = 'Funds generated successfully';
            $error = false;

            foreach ($shopkeepers as $shopkeeper) {
                $recieved = RecieveFund::where('shopkeeper_id', $shopkeeper->id)
                    ->where('month', $request->month)
                    ->where('year', $request->year)
                    ->get();

                if ($recieved->isEmpty()) {
                    // Process the shopkeeper and update or create funds here
                    $fund = Fund::updateOrCreate(
                        [
                            'shopkeeper_id' => $shopkeeper->id,
                            'month' => $request->month,
                            'year' => $request->year,
                        ],
                        [
                            'name' => $shopkeeper->name,
                            'amount' => $request->amount, // Adjust this as needed
                            'due_amount' => $request->amount, // Adjust this as needed
                        ]
                    );
                } else {
                    $error = true; // Set error flag if any shopkeeper has already received funds
                }
            }

            if ($error) {
                return redirect()->back()->with('error', 'Funds already received');
            } else {
                return redirect()->back()->with('success', $successMessage);
            }
            return redirect()->back()->with('success', 'Funds generated successfully');
        } elseif ($request->generate == 'forsingle') {
            if ($request->month == '0') {
                return redirect()->back()->with('month', 'Month field is required');
            } elseif ($request->year == '0') {
                return redirect()->back()->with('year', 'Year field is required');
            }

            $validated = $request->validate([
                'amount' => 'required',
            ], [
                'amount.required' => 'Amount field is required.',

            ]);

            $shopkeepersid = Shopkeeper::where('id', $request->shopkeeperid)->first();


            $fund = Fund::updateOrCreate(
                [
                    'shopkeeper_id' => $shopkeepersid->id,
                    'month' => $request->month,
                    'year' => $request->year,
                ],
                [
                    'name' => $shopkeepersid->name,
                    'amount' => $request->amount,
                    'due_amount' => $request->amount,
                ]
            );

            return redirect()->back()->with('success', 'Fund generated successfully');;
        }
    }

    public function getData(Request $request)
    {
        $funds = Fund::where('shopkeeper_id', $request->id)->get();

        $output = '';

        if ($funds->isEmpty()) {
            $output .= "<p class='alert text-center'>No Fund Exists</p>";
        } else {
            foreach ($funds as $fund) {
                $output .= "<tr>
            <th scope='row'>" . $fund->id . "
                <input type='hidden' class='form-control' name='id' value='" . $fund->id . "'>
                <input type='hidden' class='form-control' name='shopkeeper_id' value='" . $fund->shopkeeper_id . "'>
            </th>
            <td>" . $fund->name . "
                <input type='hidden' class='form-control' name='name' value='" . $fund->name . "'>
            </td>
            <td>" . date("F", mktime(0, 0, 0, $fund->month, 1)) . "
                <input type='hidden' class='form-control' name='month' value='" . $fund->month . "'>
            </td>
            <td>" . $fund->year . "
                <input type='hidden' class='form-control' name='year' value='" . $fund->year . "'>
            </td>
            <td>" . $fund->amount . "
                <input type='hidden' class='form-control totalamount' name='amount' value='" . $fund->amount . "'>
            </td>
            <td>" . $fund->due_amount . "
                <input type='hidden' class='form-control due_amount' name='due_amount' value='" . $fund->due_amount . "'>
            </td>
            <td>
                <div style='width: 60%;'>
                    <input type='text' class='form-control txt-edit' name='recievedamount' placeholder='Write an amount'>
                </div>
            </td>
        </tr>";
            }
        }

        return $output;
    }

    public function receiveFund(Request $request)
    {
        $requestData = $request->input('formData');

        $recieveFunds = [];

        foreach ($requestData as $data) {
            if (isset($data['receivedamount']) && $data['receivedamount'] !== "NaN") {



                $recievedFund = RecieveFund::where('id', $data['id'])->first();

                if (!$recievedFund) {
                    $recieveFund = RecieveFund::create([
                        'shopkeeper_id' => $data['shopkeeper_id'],
                        'month' => $data['month'],
                        'year' => $data['year'],
                        'name' => $data['name'],
                        'amount' => $data['receivedamount'],
                        'due_amount' => $data['due_amount'],
                        'date' => $data['date'],
                    ]);
                } else {
                    $oldReceivedFund = $recievedFund->amount;

                    $recievedFund->amount = $oldReceivedFund + $data['receivedamount'];

                    $recievedFund->save();
                }


                $updateamount = Fund::where('id', $data['id'])->update(['due_amount' => $data['due_amount'] - $data['receivedamount']]);

                $dueamount = Fund::where('due_amount', 0)->delete();

                $recieveFunds[] = $data['name'];
            }
        }

        $recieveFundsname = implode(', ', $recieveFunds);

        return "Funds Recieved Successfully";
    }
}
