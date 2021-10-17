<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;


use App\Models\Offer;

class OfferController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:offer-list|offer-create|offer-edit|offer-delete', ['only' => ['index','show']]);
         $this->middleware('permission:offer-create', ['only' => ['create','store']]);
         $this->middleware('permission:offer-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:offer-delete', ['only' => ['destroy']]);
    }



    public function index()
    {
        $offers = Offer::latest()->paginate(4);
        return view('backend.offers.index',compact('offers'));
    }


    public function create()
    {
        return view('backend.offers.create');

    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'title' => 'required|unique:sliders|min:2',
                'price' => '',
                'discounted_price' => '',
                'link' => '',
                'description' => '',
                'status' => 'required',
            ]
        );

        $image = $request->file('image');

        if ($image) {
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/sliders/' . $name_gen);
            $last_img = 'uploads/offers/' . $name_gen;

            Offer::insert([
                'title' => $request->title,
                'price' => $request->price,
                'discounted_price' => $request->discounted_price,
                'link' => $request->link,
                'image' => $last_img,
                'description' => $request->description,
                'status' => $request->status,
            ]);
        } else {

            Offer::insert([
                'title' => $request->title,
                'price' => $request->price,
                'discounted_price' => $request->discounted_price,
                'link' => $request->link,
                'image' => '',
                'description' => $request->description,
                'status' => $request->status,
            ]);
        }

        return Redirect()->route('offers.index')->with('success', 'სლაიდი დაემატა');

    }
    public function show(Offer $offer)
    {
        return view('backend.offers.show',compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        return view('backend.offers.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
         request()->validate([

            'text' => 'required',
            'link' => 'required',
            'url' => '',
        ]);

        $offer->update($request->all());

        return redirect()->route('offers.index')
                        ->with('success','პროდუქციის ჩანაწერი განახლდა');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();

        return redirect()->route('offers.index')
                        ->with('success','შეთავაზება წაიშალა !');
    }
}
