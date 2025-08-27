<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    /**
     * Display a list of bookings.
     */
    public function index()
    {
        $bookings = Booking::with(['user', 'room'])->orderBy('check_in_date', 'desc')->get();
        return view('receptionist.bookings', compact('bookings'));
    }

    /**
     * Show the form to create a new booking.
     */
    public function create()
    {
        $guests = User::all();
        $rooms = Room::all();
        return view('receptionist.create', compact('guests', 'rooms'));
    }

    /**
     * Store a new booking.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'        => 'required|exists:users,id',
            'room_id'        => 'required|exists:rooms,id',
            'check_in_date'  => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
            'check_in_time'  => 'nullable|date_format:H:i',
            'notes'          => 'nullable|string',
        ]);

        Booking::create([
            'user_id'        => $request->user_id,
            'room_id'        => $request->room_id,
            'check_in_date'  => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'status'         => 'Accepted',
            'notes'          => $request->notes,
        ]);

        return redirect()->route('receptionist.index')->with('success', 'Booking created successfully.');
    }

    /**
     * Show the form to edit a booking.
     */
    public function edit(Booking $booking)
    {
        $booking->load(['user', 'room']); // Load relationships
        $rooms = Room::all();
        return view('receptionist.edit', compact('booking', 'rooms'));
    }

    /**
     * Update an existing booking.
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'room_id'        => 'required|exists:rooms,id',
            'check_in_date'  => 'required|date',
            'check_out_date' => 'required|date|after:check_in_date',
            'status'         => 'required|string',
            'notes'          => 'nullable|string',
        ]);

        $booking->update([
            'room_id'        => $request->room_id,
            'check_in_date'  => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'status'         => $request->status,
            'notes'          => $request->notes,
        ]);

        return redirect()->route('receptionist.index')->with('success', 'Booking updated successfully.');
    }

    /**
     * Delete a booking.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('receptionist.index')->with('success', 'Booking cancelled successfully.');
    }

    /**
     * Mark a booking as Checked In.
     */
    public function checkin(Booking $booking)
    {
        $booking->update(['status' => 'CheckedIn']);

        return redirect()->route('receptionist.index')->with('success', 'Guest checked in successfully.');
    }

    /**
     * Mark a booking as Checked Out.
     */
    public function checkout(Booking $booking)
    {
        $booking->update(['status' => 'CheckedOut']);

        return redirect()->route('receptionist.index')->with('success', 'Guest checked out successfully.');
    }
}