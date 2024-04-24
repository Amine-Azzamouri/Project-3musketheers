<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // create reservation page
    public function create()
    {
        $user = Auth::user();

        return view('reservation.create', compact('user'));
    }

    // store reservation, saves data in the database
    public function store(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'phone_number' => 'required',
            'address' => 'required',
            'package' => 'required',
            'location' => 'required',
        ]);

        $reservation = new Reservation([
            'user_id' => $user->id,
            'phone_number' => $validatedData['phone_number'],
            'address' => $validatedData['address'],
            'package' => $validatedData['package'],
            'location' => $validatedData['location'],
        ]);

        $reservation->save();

        return redirect('/')->with('success', 'Reservation created successfully');
    }
}
