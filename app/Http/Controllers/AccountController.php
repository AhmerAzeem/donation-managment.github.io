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
}
