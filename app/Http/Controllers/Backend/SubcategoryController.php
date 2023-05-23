<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function AllSubCategory()
    {
        $get_subcategories = Subcategory::latest()->get();
        return view('backend.subcategory.subcategory_all', compact('get_subcategories'));
    }

    public function AddSubCategory()
    {
        $add_categories = Category::latest()->get();
        return view('backend.subcategory.subcategory_add', compact('add_categories'));
    }

    public function StoreSubCategory(Request $request)
    {
        Subcategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_description' => $request->subcategory_description,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
        ]);

        $notification = array(
            'message' => 'Sub Category Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.subcategory')->with($notification);

    }
}
