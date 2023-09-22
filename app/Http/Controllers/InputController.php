<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopkeeper;

class InputController extends Controller
{
    public function getShopkeeper(Request $request)
    {
        // return $request->all();
        $shopkeepers = Shopkeeper::where('id', $request->id)->first();

        return $shopkeepers->name;
    }
}
