<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

use App\Models\Promotion;

class PromotionController extends Controller
{


    function __construct()
    {
         $this->middleware('permission:promotion-list|promotion-create|promotion-edit|promotion-delete', ['only' => ['index','show']]);
         $this->middleware('permission:promotion-create', ['only' => ['create','store']]);
         $this->middleware('permission:promotion-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:promotion-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $promotions = Promotion::latest()->paginate(10);
        return view('backend.promotions.index',compact('promotions'));

    }


    public function create()
    {
        return view('backend.promotions.create');

    }


    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([

                    'text' => 'required',
                    'link' => 'required',
                    'end_date' => 'required',
                    'image' => 'mimes:jpeg,png|max:1024',
                    'end_date' => 'required',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public/promotions', $validated['text'].".".$extension);
                $url = Storage::url("promotions/".$validated['text'].".".$extension);

                $file = Promotion::create([

                    'text' => $validated['text'],
                    'link' => $validated['link'],
                    'end_date' => $validated['end_date'],
                    'url' => $url,

                ]);


                return redirect()->route('promotions.index')
                ->with('success','ახალი აქცია დაემატა.');

            }
        }
        abort(500, 'Could not upload image');

    }


    public function show(Promotion $promotion)
    {
        return view('backend.promotions.show',compact('promotion'));
    }


    public function edit(Promotion $promotion)
    {
        return view('backend.promotions.edit',compact('promotion'));
    }


    public function update(Request $request, Promotion $promotion)
    {
         request()->validate([

            'text' => 'required',
            'link' => 'required',
            'url' => '',
        ]);

        $promotion->update($request->all());

        return redirect()->route('promotions.index')
                        ->with('success',' ჩანაწერი განახლდა');
    }

    public function destroy(Promotion $promotion)
    {
        $promotion->delete();

        return redirect()->route('promotions.index')
                        ->with('success','შეთავაზება წაიშალა !');
    }
}
