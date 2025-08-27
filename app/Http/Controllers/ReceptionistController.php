<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingStatusMail;

class ReceptionistController extends Controller
{
    public function index()
    {
        // Show all bookings
        $bookings = Booking::with('user', 'room')->orderBy('created_at', 'desc')->get();
        return view('receptionist.bookings', compact('bookings'));
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:Accepted,Cancelled',
        ]);

        $booking->status = $request->status;
        $booking->save();

        // Send email to user
        Mail::to($booking->user->email)->send(new BookingStatusMail($booking));

        return back()->with('success', 'Booking status updated and email sent.');
    }
}
