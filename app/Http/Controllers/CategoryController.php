<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
Use Image;

class CategoryController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:category-list|category-create|category-edit|category-delete', ['only' => ['index','show']]);
         $this->middleware('permission:category-create', ['only' => ['create','store']]);
         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:category-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $categories = Category::latest()->paginate(5);

        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::with('children')->whereNull('parent_id')->get();
        return view('backend.categories.create')->with(['categories'  => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        category::create($request->all());

        return redirect()->route('categories.index')
                        ->with('success','ჩანაწერი დაემატა.');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'name' => 'required|min:2',
            ],
            [
                'name_ka.required' => 'შეავსეთ ველი',
                'parent_id' => '',
                'image' => '',
                'position' => '',
            ]
        );

        $image = $request->file('image');

        if ($image) {
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/category/' . $name_gen);
            $last_img = 'uploads/category/' . $name_gen;

            Category::insert([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'image' => $last_img,
                'position' => $request->position,
            ]);
        } else {
            Category::insert([
                'name' => $request->name,
                'parent_id' => $request->parent_id,
                'image' => '',
                'position' => $request->position,
            ]);
        }

        return Redirect()->route('categories.index')->with('success', 'კატეგორია დაემატა');
    }


    public function show(Category $Category)
    {
        return view('categories.show',compact('Category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $Category)
    {
        return view('categories.edit',compact('Category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
                        ->with('success','ჩანაწერი განახლდა!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $Category)
    {
        $Category->delete();

        return redirect()->route('categories.index')
                        ->with('success','ჩანაწერი წაიშალა');
    }
}
