<?php

namespace App\Http\Controllers;

use App\Models\TourCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;



class TourCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tours = TourCategory::all();
        return view('backend.tour_category.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.tour_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'tour_category' => 'required|min:3|max:50|unique:tour_categories,name',
            ],
            [
                'tour_category.required' => 'Tour category must be entered',
                'tour_category.min'      => 'Tour category name minimum 3 letters',
                'tour_category.max'      => 'Tour category name maximum 50 letters',
                'tour_category.unique'   => 'This tour category already exists',
            ]
        );

        $tour_category = [
            'name' => $request->tour_category,
            'slug' => Str::slug($request->tour_category),
        ];
        TourCategory::create($tour_category);
        return redirect()->route('tour_category.index')->with('success', 'Tour Category Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(TourCategory $tourCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TourCategory $tourCategory)
    {
        //dd($tourCategory);
        return view('backend.tour_category.edit', compact('tourCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TourCategory $tourCategory)
    {
        $request->validate(
            [
                'tour_category' => 'required|min:3|max:50|unique:tour_categories,name,' . $tourCategory->id,
            ],
            [
                'tour_category.required' => 'Tour category must be entered',
                'tour_category.min'      => 'Tour category name minimum 3 letters',
                'tour_category.max'      => 'Tour category name maximum 50 letters',
                'tour_category.unique'   => 'This tour category already exists',
            ]
        );

        $data = [
            'name' => $request->tour_category,
            'slug' => Str::slug($request->tour_category),
            'status' => $request->status,
        ];

        $tourCategory->update($data);

        return redirect()
            ->route('tour_category.index')
            ->with('success', 'Tour Category Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourCategory $tourCategory)
    {
        $tourCategory->delete();
        return redirect()->route('tour_category.index')->with("success", "Delete Successfully");
    }
}
