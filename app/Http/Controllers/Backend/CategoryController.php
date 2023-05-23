<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class CategoryController extends Controller
{
    //
    public function AllCategory()
    {
        $get_categories = Category::latest()->get();
        return view('backend.category.category_all', compact('get_categories'));
    }

    public function AddCategory()
    {
        return view('backend.category.category_add');
    }

    public function StoreCategory(Request $request)
    {
        Category::insert([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.category')->with($notification);

    }

    public function EditCategory($id)
    {
        $categories = Category::findOrFail($id);

        return view('backend.category.category_edit', compact('categories'));
    }

    public function UpdateCategory(Request $request)
    {
        $get_cat_id = $request->id;

        Category::findOrFail($get_cat_id)->update([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
        ]);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('all.category')->with($notification);
    }

    public function DeleteCategory($id)
    {
        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function GetSubCategory($category_id)
    {
        $subcat = Subcategory::where('category_id', $category_id)->orderBy('subcategory_name', 'ASC')->get();
        return json_encode($subcat);
    }
}

