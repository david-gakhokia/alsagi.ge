<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

use App\Models\Slider;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
         $this->middleware('permission:slider-list|slider-create|slider-edit|slider-delete', ['only' => ['index','show']]);
         $this->middleware('permission:slider-create', ['only' => ['create','store']]);
         $this->middleware('permission:slider-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:slider-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $sliders = Slider::latest()->paginate(4);
        return view('backend.sliders.index',compact('sliders'));
    }


    public function create()
    {
        return view('backend.sliders.create');
    }



    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'title' => 'required|unique:sliders|min:2',
                'link' => '',
                'description' => '',
                'status' => 'required',
            ]
        );

        $image = $request->file('image');

        if ($image) {
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/sliders/' . $name_gen);
            $last_img = 'uploads/sliders/' . $name_gen;

            Slider::insert([
                'title' => $request->title,
                'image' => $last_img,
                'link' => $request->link,
                'description' => $request->description,
                'status' => $request->status,
            ]);
        } else {

            Slider::insert([
                'title' => $request->title,
                'image' => '',
                'link' => $request->link,
                'description' => $request->description,
                'status' => $request->status,
            ]);
        }

        return Redirect()->route('sliders.index')->with('success', 'სლაიდი დაემატა');

    }

    public function store1(Request $request)
    {

        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'link' => 'required',
                    'image' => 'mimes:jpeg,png|max:1024',
                    'detail' => 'required',

                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public/sliders', $validated['name'].".".$extension);
                $url = Storage::url("sliders/".$validated['name'].".".$extension);

                $file = Slider::create([

                    'name' => $validated['name'],
                    'url' => $url,
                    'link' => $validated['link'],
                    'detail' => $validated['detail'],
                ]);


                return redirect()->route('sliders.index')
                ->with('success','სლაიდერი დაემატა.');

            }
        }
        abort(500, 'Could not upload image :(');

    }


    public function show(Slider $slider)
    {
        return view('backend.sliders.show',compact('slider'));
    }


    public function edit(Slider $slider)
    {
        return view('backend.sliders.edit',compact('slider'));

    }

    public function update(Request $request, Slider $slider)
    {
         request()->validate([


            'link' => 'required',
            'detail' => 'required',


        ]);

        $slider->update($request->all());

        return redirect()->route('sliders.index')
                        ->with('success','ჩანაწერი განახლდა ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('sliders.index')
                        ->with('success','სლაიდერი წაიშალა !');
    }
}
