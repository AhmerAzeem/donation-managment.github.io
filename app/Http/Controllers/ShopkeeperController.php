<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopkeeper;
use App\Http\Requests\UpdateShopkeeperRequest;
use Illuminate\Support\Facades\DB;

class ShopkeeperController extends Controller
{

    public function index()
    {
        $shopkeepers = Shopkeeper::get();
        return view('admin.shopkeepers.shopkeeper', compact('shopkeepers'));
    }

    public function shopkeepersIndex()
    {
        $shopkeepers = Shopkeeper::get();

        $numRows = $shopkeepers->count();

        return $numRows;
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required|string|size:11',
            'cnic' => 'required|string|size:13',
            'address' => 'required',
        ]);

        $shopkeeper = Shopkeeper::create($validated);

        if ($request->has('shopno') && $request->filled('shopno')) {
            $shopkeeper->shop_no = $request->input('shopno');
            $shopkeeper->save();
        }

        if ($request->has('home_address') && $request->filled('home_address')) {
            $shopkeeper->home_address = $request->input('home_address');
            $shopkeeper->save();
        }

        return redirect()->back()->with('success', 'Shopkeeper Added Successfully');
    }

    public function status($id)
    {
        $shopkeeper = Shopkeeper::find($id);

        if ($shopkeeper->status == 'Active') {
            $status = 'Inactive';
        } else {
            $status = 'Active';
        }

        Shopkeeper::where('id', $id)->update(['status' => $status]);

        return redirect()->back()->with('success', 'Status Changed Successfully');
    }

    public function edit(Request $request)
    {
        $shopkeepersdata = Shopkeeper::where('id', $request->id)->first();
        return view('admin.shopkeepers.edit', compact('shopkeepersdata'));
    }

    public function update(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required|string|size:11',
            'cnic' => 'required|string|size:13',
            'address' => 'required',
        ]);

        $shopkeeper = Shopkeeper::where('id', $request->id)->first();

        $shopkeeper->update($validated);

        if ($request->has('shopno') && $request->filled('shopno')) {
            $shopkeeper->shop_no = $request->input('shopno');
            $shopkeeper->save();
        }

        if ($request->has('home_address') && $request->filled('home_address')) {
            $shopkeeper->home_address = $request->input('home_address');
            $shopkeeper->save();
        }

        return redirect(route('manage.shopkeepers'))->with('success', 'Shopkeeper updated successfully');
    }
}
