<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $products = Product::get();

        return view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.products.create', compact('categories'));
    }



    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required|unique:products|min:2',
                'sku' => '',
                'category_id' => '',
                'price' => 'required',
                'brand' => '',
                'qty' => '',
                'description' => '',
                'status' => 'required',
            ]
        );

        $image = $request->file('image');

        if ($image) {
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/products/' . $name_gen);
            $last_img = 'uploads/products/' . $name_gen;

            Product::insert([
                'name' => $request->name,
                'sku' => $request->sku,
                'image' => $last_img,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'qty' => $request->qty,
                'brand' => $request->brand,
                'description' => $request->description,
                'status' => $request->status,
            ]);
        } else {

            Product::insert([
                'name' => $request->name,
                'sku' => $request->sku,
                'category_id' => $request->category_id,
                'image' => '',
                'price' => $request->price,
                'qty' => $request->qty,
                'brand' => $request->brand,
                'description' => $request->description,
                'status' => $request->status,
            ]);
        }

        return Redirect()->route('products.index')->with('success', 'პროდუქტი დაემატა');
    }

    public function show(Product $product)
    {
        return view('backend.products.show',compact('product'));
    }


    public function edit(Product $product  )
    {
        $categories = Category::all();
        $products = Product::all();


        return view('backend.products.edit',compact(['product','categories']));
        // return $products>$id;
        // print_r($product_id);
        // return response()->json($products, 200);
    }


    public function update1(Request $request, Product $product)
    {
         request()->validate([
            'name' => 'string|max:40',
            'price' => 'required',
            'tags' => 'required',
            'image' => 'mimes:jpeg,png|max:1024',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success','პროდუქციის ჩანაწერი განახლდა');
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate(
            [
                'status' => 'required',
                'name' => 'required|min:2',
                'category_id' => 'required',
                'price' => 'required',
            ],
            [
                'name.required' => 'Name',
                'image' => 'image',
                'price' => 'price ',

            ]
        );

        $old_image = $request->old_image;

        $image = $request->file('image');

        if ($image) {

            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen . '.' . $img_ext;
            $up_location = 'uploads/products/';
            $last_img = $up_location . $img_name;
            $image->move($up_location, $img_name);
            if (file_exists($old_image)) unlink($old_image);
            Product::find($id)->update([

                'name' => $request->name,
                'sku' => $request->sku,
                'image' => $last_img,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'qty' => $request->qty,
                'brand' => $request->brand,
                'description' => $request->description ? $request->description : "",
                'status' => $request->status,
            ]);

            return Redirect()->route('products.index')->with('success', 'პროდუქტი განახლდა');
        } else {
            Product::find($id)->update([
                'name' => $request->name,
                'sku' => $request->sku,
                'category_id' => $request->category_id,
                'price' => $request->price,
                'qty' => $request->qty,
                'brand' => $request->brand,
                'description' => $request->description ? $request->description : "",
                'status' => $request->status,
            ]);

            return Redirect()->route('products.index')->with('success', 'პროდუქტი განახლდა');
        }
    }


    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success','პროდუქტი წაიშალა !');
    }
}
