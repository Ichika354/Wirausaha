<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function allProductView()
    {
        $categories = Categories::all();
        $products = Products::all();
        return view('product', compact('categories', 'products'));
    }

    public function productDetail($id)
    {
        $product = Products::with('category')->findOrFail($id);
        // dd($product);
        return view('detailproduct', compact('product'));
    }

    public function checkout(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'qty' => 'required|integer',
        ]);

        // Ambil data produk
        $product = Products::findOrFail($request->product_id);
        $user = Auth::user()->user_id;
        $totalPrice = $product->price * $request->qty;
        $sellerId = $product->user_id;

        // Simpan data pesanan ke database
        $order = Orders::create([
            'user_id' => $user,
            'product_id' => $request->product_id,
            'qty' => $request->qty,
            'total_price' => $totalPrice,
            'seller_id' => $sellerId,
            'status' => 'Unpaid',
        ]);

        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false; // Ubah ke true jika sudah live
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Data untuk transaksi Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $order->order_id,
                'gross_amount' => $order->total_price,
            ],
            'customer_details' => [
                'name' => Auth::user()->fullname,
                'phone' => Auth::user()->phone_number,
            ],
        ];

        // dd($params);

        // Ambil Snap Token dari Midtrans
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Tampilkan halaman checkout dengan Midtrans
        return view('pay', compact('snapToken', 'order', 'product'));
    }

    public function callback(Request $request)
    {
        $server_key = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $server_key);

        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                $order = Orders::find($request->order_id);

                if ($order) {
                    // Update status pesanan menjadi "Paid"
                    $order->update(['status' => 'Paid']);

                    // Kurangi stok produk sesuai dengan jumlah yang dibeli
                    $product = Products::find($order->product_id);
                    if ($product && $product->stock >= $order->qty) {
                        $product->update(['stock' => $product->stock - $order->qty]);
                    }
                }
            }
        }
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
