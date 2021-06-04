<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;
use Illuminate\Support\Facades\Validator;

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
                    'categories.id')->where("products.name", "like", "%$key%")->orderBy('products.id',
                    'asc')->select('products.*',
                    'categories.name AS category_name')->paginate(5);
                $products->appends(['key' => $key]);
            } else {
                $products = Product::join('categories', 'products.category_id', '=',
                    'categories.id')->orderBy('products.id', 'asc')->select('products.*',
                    'categories.name AS category_name')->paginate(5);
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

    public function updateProduct(Request $request, $id)
    {
        $user = Auth::user();
        if ($user->can('update', Product::class)) {
            $this->validateUpdateProduct($request->all(), $id)->validate();
            $product = Product::find($id);
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->category_id = $request->input('category');
            //if update img
            if ($request->hasFile('image')) {
                // delete old image
                if (File::exists(public_path($product->image))) {
                    File::delete(public_path($product->image));
                } else {
                    echo('File does not exists.');
                }
                // add new image
                $imageName = round(microtime(true)) . uniqid() . '.' . $request->image->extension();
                $request->image->move(public_path('/uploads/product'), $imageName);
                $product->image = "/uploads/product/$imageName";
            }
            $product->save();
            return back();
        } else {
            return redirect('/home');
        }
    }

    /**
     *
     * Hoa
     * Get a validator for an incoming update product request.
     * created at
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateUpdateProduct(array $data, $id)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'min:4', 'unique:products,name,'.$id],
            'price' => ['required', 'integer', 'min:0', 'max:2147483647'],
            'category' => ['required', 'string'],
            'image' => ['image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);
    }
}
