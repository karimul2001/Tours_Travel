<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use App\Models\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = TourPackage::all();
        return view('backend.tour_package.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $datas = TourCategory::all();
        return view('backend.tour_package.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$request validation
        $request->validate(
            [
                'title' => 'required|min:5|max:100',
                'price' => 'required',
                'duration' => 'required',
                'location' => 'required',
                'description' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'title.required' => 'Title must be entered.',
                'title.min' => 'Title must be at least 5 characters.',
                'title.max' => 'Title may not be greater than 100 characters.',

                'price.required' => 'Price must be entered.',
                'duration.required' => 'Duration must be entered.',
                'location.required' => 'Location must be entered.',
                'description.required' => 'Description must be entered.',

                'image.image' => 'The file must be an image.',
                'image.mimes' => 'Image must be a file of type: jpeg, png, jpg.',
                'image.max' => 'Image size must not exceed 2MB.',
            ]
        );


        // image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('package_photo'), $imageName);
            $package_img = 'package_photo/' . $imageName;
        } else {
            $package_img = 'package_photo/nophoto.jpg';
        }
        //user Eloqute query
        $data = [
            'tour_category_id' => $request->tour_category,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'price' => $request->price,
            'duration' => $request->duration,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $package_img,



        ];
        TourPackage::create($data);
        return redirect()->route('tour_package.index')->with('success', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
