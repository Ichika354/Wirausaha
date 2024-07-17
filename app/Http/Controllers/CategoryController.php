<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function adminCategoryView()
    {
        $categories = Categories::all();
        return view('admin.category', compact('categories'));
    }

    public function storeCategory(Request $request)
    {
        $request->validate([
            'category' => 'string|required|max:100',
            'icon' => 'string|required|max:100',
        ]);

        $categoryData = [
            'category' => $request->category,
            'icon' => $request->icon,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        Categories::create($categoryData);

        return redirect()->route('category.admin')->with('success', 'Category added successfully');
    }
}
