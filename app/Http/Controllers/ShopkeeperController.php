<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateShopkeeperRequest;
use App\Http\Requests\ShopkeeperStoreRequest;
use Illuminate\Http\Request;
use App\Models\{Shopkeeper, Category, CategoryShopkeeper};
use Illuminate\Validation\Rule;

class ShopkeeperController extends Controller
{

    private $categories;

    public function __construct()
    {
        $this->categories = Category::where('status', 'Active')->get();
    }

    public function index()
    {
        if (request()->ajax()) {
            return Shopkeeper::find(request()->id)->pluck('name')->first();
        }
        $shopkeepers = Shopkeeper::with('categories')->where('status', 'Active')->get();

        return view('admin.shopkeepers.index', get_defined_vars());
    }

    public function create()
    {
        $categories = $this->categories;
        return view('admin.shopkeepers.create', get_defined_vars());
    }


    public function store(ShopkeeperStoreRequest $request)
    {
        $shopkeeper = Shopkeeper::create($request->validated());

        $shopkeeper->categories()->attach($request->category);

        if ($request->has('shopno') && $request->filled('shopno')) {
            $shopkeeper->shop_no = $request->input('shopno');
            $shopkeeper->save();
        }

        if ($request->has('cnic') && $request->filled('cnic')) {
            $shopkeeper->cnic = $request->input('cnic');
            $shopkeeper->save();
        }
        if ($request->has('amount') && $request->filled('amount')) {
            $shopkeeper->amount = $request->input('amount');
            $shopkeeper->save();
        }

        return redirect()->back()->with('success', 'Shopkeeper Added Successfully');
    }



    public function edit(Request $request, Shopkeeper $shopkeeper)
    {
        $categories = $this->categories;
        return view('admin.shopkeepers.edit', get_defined_vars());
    }

    public function update(UpdateShopkeeperRequest $request, Shopkeeper $shopkeeper)
    {
        $shopkeeper->update($request->all());
        $shopkeeper->categories()->sync($request->category);

        return redirect(route('shopkeepers.index'))->with('success', 'Shopkeeper updated successfully');
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
}
