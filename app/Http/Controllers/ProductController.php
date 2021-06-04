<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getProducts(Request $request)
    {
        $user = Auth::user();
        if ($user->can('viewAny', Product::class)) {
            $key = trim($request->input('key'));
            if ($key != "") {
                $products = Product::join('categories', 'products.category_id', '=',
                    'categories.id')->where("products.name", "like", "%$key%")->select('products.*',
                    'categories.name AS category_name')->paginate(5);
                $products->appends(['key' => $key]);
            } else {
                $products = Product::join('categories', 'products.category_id', '=',
                    'categories.id')->select('products.*', 'categories.name AS category_name')->paginate(5);
            }
            return view('manage_product', ['products' => $products]);
        } else {
            return redirect('/home');
        }
    }

    public function deleteProduct($id)
    {
        $user = Auth::user();
        if ($user->can('delete', Product::class)) {
            $product = Product::find($id);
            if ($product) {
                if (File::exists(public_path($product->image))) {
                    File::delete(public_path($product->image));
                } else {
                    echo('File does not exists.');
                }
                Product::destroy($id);
            }
            return back();
        } else {
            return redirect('/home');
        }
    }
}
