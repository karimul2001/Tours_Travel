<?php

namespace App\Http\Controllers;

use App\Models\Resort;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ResortController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Resort::all();
        return view('backend.resorts.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.resorts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Resort Validation
        $request->validate(
            [
                'name'             => 'required|string|max:100',
                'slug'             => 'nullable|string|unique:resorts,slug',
                'location'         => 'required|string|max:200',
                'price_per_night'  => 'required|numeric|min:0',
                'description'      => 'required|string',
                'image'            => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
                'contact_number'   => 'required|string|max:20',
                'email'            => 'nullable|email',
                'website'          => 'nullable|url',
                'status'           => 'required|boolean',
            ],
            [
                'name.required'            => 'Resort name is required.',
                'name.max'                 => 'Resort name may not exceed 100 characters.',

                'slug.unique'              => 'This slug has already been taken.',

                'location.required'        => 'Location is required.',
                'location.max'             => 'Location may not exceed 200 characters.',

                'price_per_night.required' => 'Price per night is required.',
                'price_per_night.numeric'  => 'Price must be a number.',
                'price_per_night.min'      => 'Price cannot be negative.',

                'description.required'     => 'Description is required.',

                'image.required'           => 'Please upload an image.',
                'image.image'              => 'The file must be an image.',
                'image.mimes'              => 'Image must be a file of type: jpg, jpeg, png, webp.',
                'image.max'                => 'Image size must not exceed 2MB.',

                'contact_number.required'  => 'Contact number is required.',
                'contact_number.max'       => 'Contact number may not exceed 20 characters.',

                'email.email'              => 'Please enter a valid email address.',
                'website.url'              => 'Please enter a valid website URL.',

                'status.required'          => 'Status is required.',
                'status.boolean'           => 'Status must be either active or inactive.',
            ]
        );


        // ✅ Image upload
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/resorts'), $imageName);
        }

        // ✅ Store data
        Resort::create([
            'name'            => $request->name,
            'slug' => Str::slug($request->slug ?? $request->name),
            'location'        => $request->location,
            'price_per_night' => $request->price_per_night,
            'description'     => $request->description,
            'image'           => $imageName,
            'contact_number'  => $request->contact_number,
            'email'           => $request->email,
            'website'         => $request->website,
            'status'          => $request->status,
        ]);

        // ✅ Redirect
        return redirect()
            ->route('resorts.index')
            ->with('success', 'Resort added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Resort $resort)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resort $resort)
    {
        //dd($resort);
        return view('backend.resorts.edit', compact('resort'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resort $resort)
    {
        //  Validation
        $request->validate(
            [
                'name'             => 'required|string|max:100',
                'slug'             => 'nullable|string|unique:resorts,slug,' . $resort->id,
                'location'         => 'required|string|max:200',
                'price_per_night'  => 'required|numeric|min:0',
                'description'      => 'required|string',
                'image'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'contact_number'   => 'required|string|max:20',
                'email'            => 'nullable|email',
                'website'          => 'nullable|url',
                'status'           => 'required|boolean',
            ],
            [
                'name.required'            => 'Resort name is required.',
                'name.max'                 => 'Resort name may not exceed 100 characters.',
                'slug.unique'              => 'This slug has already been taken.',
                'location.required'        => 'Location is required.',
                'location.max'             => 'Location may not exceed 200 characters.',
                'price_per_night.required' => 'Price per night is required.',
                'price_per_night.numeric'  => 'Price must be a number.',
                'price_per_night.min'      => 'Price cannot be negative.',
                'description.required'     => 'Description is required.',
                'image.image'              => 'The file must be an image.',
                'image.mimes'              => 'Image must be a file of type: jpg, jpeg, png, webp.',
                'image.max'                => 'Image size must not exceed 2MB.',
                'contact_number.required'  => 'Contact number is required.',
                'contact_number.max'       => 'Contact number may not exceed 20 characters.',
                'email.email'              => 'Please enter a valid email address.',
                'website.url'              => 'Please enter a valid website URL.',
                'status.required'          => 'Status is required.',
                'status.boolean'           => 'Status must be either active or inactive.',
            ]
        );

        //  Prepare data for update
        $data = [
            'name'            => $request->name,
            'slug'            => $request->slug ? Str::slug($request->slug) : Str::slug($request->name),
            'location'        => $request->location,
            'price_per_night' => $request->price_per_night,
            'description'     => $request->description,
            'contact_number'  => $request->contact_number,
            'email'           => $request->email,
            'website'         => $request->website,
            'status'          => $request->status,
        ];

        //  Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($resort->image && file_exists(public_path($resort->image))) {
                unlink(public_path($resort->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/resorts'), $imageName);

            $data['image'] = 'uploads/resorts/' . $imageName;
        }

        //  Update Resort
        $resort->update($data);

        //  Redirect with success message
        return redirect()->route('resorts.index')->with('success', 'Resort updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resort $resort)
    {
        if ($resort->image && file_exists(public_path($resort->image))) {
            unlink(public_path($resort->image));
        }

        $resort->delete();
        return redirect()->route('resorts.index')
            ->with('success', 'Successfully Deleted');
    }
}
