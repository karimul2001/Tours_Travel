<?php

namespace App\Http\Controllers;

use App\Models\TourBooking;
use App\Models\TourPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = TourBooking::with(['tourPackage', 'user'])->latest()->get();
        return view('backend.tour_booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tour_package_id)
    {
        $tour = TourPackage::findOrFail($tour_package_id);
        return view('backend.tour_booking.create', compact('tour'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tour_package_id' => 'required|exists:tour_packages,id',
            'tour_date' => 'required|date',
            'persons' => 'required|integer|min:1',
        ]);

        $tour = TourPackage::findOrFail($request->tour_package_id);

        TourBooking::create([
            'tour_package_id' => $tour->id,
            
            'tour_date' => $request->tour_date,
            'persons' => $request->persons,
            'price_per_person' => $tour->price,
            'total_price' => $tour->price * $request->persons,
            'booking_status' => 'pending',
            'payment_status' => 'unpaid',
        ]);

        return redirect()->route('tour_booking.index')->with('success', 'Tour booked successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(TourBooking $tourBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TourBooking $tourBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TourBooking $tourBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TourBooking $tourBooking)
    {
        //
    }
}
