<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();

        return view('admin.categories.categories', compact('categories'));
    }

    public function create(Request $request)
    {
        $account = Category::create([
            'name' => $request->name,
        ]);

        return "Category created successfully";
    }

    public function statusupdate($id)
    {
        $category = Category::find($id);

        if ($category->status == 'Active') {
            $status = 'Inactive';
        } else {
            $status = 'Active';
        }

        Category::where('id', $id)->update(['status' => $status]);

        return redirect()->back()->with('success', 'Status Changed Successfully');
    }

    public function getData()
    {
        $categories = Category::where('status', "Active")->get();

        $categoryOptions = [];

        foreach ($categories as $category) {
            $categoryOptions[$category->id] = $category->name;
        }

        return response()->json($categoryOptions);
    }
}
