<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;

class AccountController extends Controller
{

    public function index()
    {
        $accounts = Accounts::get();

        return view('admin.accounts.accounts', compact('accounts'));
    }

    public function create(Request $request)
    {

        $account = Accounts::create([
            'name' => $request->accountname,
        ]);

        return "Account created successfully";
    }

    public function status($id)
    {
        $account = Accounts::find($id);

        if ($account->status == 'Active') {
            $status = 'Inactive';
        } else {
            $status = 'Active';
        }

        Accounts::where('id', $id)->update(['status' => $status]);

        return redirect()->back()->with('success', 'Status Changed Successfully');
    }

    public function getAccounts()
    {
        $accounts = Accounts::all(); // Assuming "Account" is the model name

        $accountOptions = [];

        foreach ($accounts as $account) {
            $accountOptions[$account->id] = $account->name;
        }

        return response()->json($accountOptions);
    }

    public function searchAccount()
    {
        return view('admin.accounts.ledger');
    }
}
