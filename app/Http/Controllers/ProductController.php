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

    /**
     *
     * Hoa
     * Created at 04-06-2021 09h00
     * get list product and search
     *
     */
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

    /**
     *
     * Hoa
     * Created at 04-06-2021 10h20
     * delete product by id
     *
     */
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
                return redirect()->back()->with('message', 'Deleted Successfully');
            } else {
                return redirect()->back()->with('error', 'Product does not exist');
            }

        } else {
            return redirect('/home');
        }
    }

    /**
     *
     * Hoa
     * Created at 05-06-2021 14h20
     * Handle a update product request
     *
     */
    public function updateProduct(Request $request)
    {
        $user = Auth::user();
        if ($user->can('update', Product::class)) {
            $id = $request->input('id_product');
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
            return redirect()->back()->with('message', 'Updated Successfully');
        } else {
            return redirect('/home');
        }
    }

    /**
     *
     * Hoa
     * created at 04-06-2021 15h20
     * Get a validator for an incoming update product request.
     * @param array $data
     * @param integer $id
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateUpdateProduct(array $data, $id)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'min:4', 'unique:products,name,' . $id],
            'price' => ['required', 'integer', 'min:0', 'max:2147483647'],
            'category' => ['required', 'integer', 'min:1'],
            'image' => ['image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);
    }

    /**
     *
     * Hoa
     * Created at 06-06-2021 15h30
     * Handle a add product request
     *
     */
    public function addProduct(Request $request)
    {
        $user = Auth::user();
        if ($user->can('create', Product::class)) {
            $this->validateAddNewProduct($request->all())->validate();
            $product = new Product;
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->category_id = $request->input('category');
            // add new image
            $imageName = round(microtime(true)) . uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('/uploads/product'), $imageName);
            $product->image = "/uploads/product/$imageName";
            $product->save();
            return redirect()->back()->with('message', 'Added Successfully');
        } else {
            return redirect('/home');
        }
    }

    /**
     *
     * Hoa
     * created at 06-06-2021 15h50
     * Get a validator for an incoming add new product request.
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validateAddNewProduct(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255', 'min:4', 'unique:products'],
            'price' => ['required', 'integer', 'min:0', 'max:2147483647'],
            'category' => ['required', 'integer', 'min:1'],
            'image' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ]);
    }
}
