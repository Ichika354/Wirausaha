<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function allProductView()
    {
        return view('product');
    }

    public function sellerProductView()
    {
        $categories = Categories::all();
        $products = Products::where('user_id', Auth::user()->user_id)->get();

        return view('seller.product', compact('categories', 'products'));
    }

    public function sellerProductAdd(Request $request)
    {
        $request->validate([
            'product' => 'required|string|max:100',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'description' => 'required|string',
            'category' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Mengubah foto menjadi string base64
        $photo = base64_encode(file_get_contents($request->file('photo')->getRealPath()));

        $productData = [
            'user_id' => Auth::user()->user_id,
            'product_name' => $request->product,
            'category_id' => $request->category,
            'price' => $request->price,
            'photo' => $photo, // Simpan foto dalam bentuk string
            'stock' => $request->stock,
            'detail' => $request->description,
        ];

        // Simpan data produk ke database
        Products::create($productData);

        return redirect()->route('product.seller')->with('success', 'Product add successfully');
    }

    public function sellerProductEdit(Request $request, $id)
    {
        $request->validate([
            'product' => 'required|string|max:100',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'description' => 'required|string',
            'category' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = Products::find($id);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoBase64 = base64_encode(file_get_contents($photo->path()));

            $product->update([
                'photo' => $photoBase64,
            ]);
        }

        $product->update([
            'category_id' => $request->category,
            'product' => $request->product,
            'price' => $request->price,
            'stock' => $request->stock,
            'detail' => $request->description,
        ]);

        return redirect()->route('product.seller')->with('success', 'Product update successfully');
    }

    public function sellerProductDelete($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('product.seller')->with('success', 'Product delete successfully');
    }

    public function adminProductView()
    {
        $products = Products::all();
        return view('admin.product', compact('products'));
    }
}
