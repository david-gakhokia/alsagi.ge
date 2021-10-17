<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Pagination\Paginator;
use App\Models\Product;
use App\Models\Post;
use App\Models\Promotion;
use App\Models\Slider;
use App\Models\Offer;

class FrontController extends Controller
{
    public function home()
    {

        $sliders = Slider::latest()->paginate(4);
        return view('frontend.home',compact('sliders'));

    }



    public function index()
    {
        $products = Product::with('categories')->latest()->paginate(5);
        $sliders = Slider::latest()->paginate(3);
        $offers = Offer::latest()->paginate(3);
        $promotions = Promotion::latest()->paginate(1);

        return view('Frontend.index',compact(['products','sliders','offers','promotions']));

    }

    public function products()
    {

        $products = Product::paginate(20);

        return view('frontend.pages.products.index', compact('products'));
        // return $products;
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.pages.products.show',compact('product'));

    }
    public function posts()
    {
        $posts = Post::paginate(20);
        return view('frontend.pages.posts.index', compact('posts'));
    }

    public function post_show($id)
    {
        $post = Post::findOrFail($id);
        return view('frontend.pages.post.show',compact('post'));

    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
