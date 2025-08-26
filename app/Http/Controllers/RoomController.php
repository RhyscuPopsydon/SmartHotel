<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Booking; // Import Booking model

class RoomController extends Controller
{
    // Show all rooms
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    // Toggle room status (occupied/vacant)
    public function toggleStatus($id)
    {
        $room = Room::findOrFail($id);
        $room->status = $room->status === 'vacant' ? 'occupied' : 'vacant';
        $room->save();

        return redirect()->back()->with('success', "Room {$room->room_number} updated!");
    }

    // Show booking page for a vacant room
    public function showBooking($id)
    {
        $room = Room::findOrFail($id);

        if($room->status === 'occupied') {
            return redirect()->route('rooms.index')->with('error', 'Room is already occupied.');
        }

        // ✅ Check kung naka-login
        $user = auth()->user();
        if(!$user) {
            return redirect()->route('login')->with('error', 'Please login to book a room.');
        }
        
        return view('rooms.book', compact('room', 'user'));
    }

    // Store booking
    public function storeBooking(Request $request, $id)
    {
        $request->validate([
            'check_in_time' => 'required',
            'payment_mode' => 'required',
        ]);

        $room = Room::findOrFail($id);

        if($room->status === 'occupied') {
            return redirect()->route('rooms.index')->with('error', 'Room already occupied!');
        }

        // Update room status
        $room->update(['status' => 'occupied']);

        // Create booking record
        auth()->user()->bookings()->create([
            'room_id' => $room->id,
            'check_in_date' => now()->toDateString(),
            'check_in_time' => $request->check_in_time,
            'payment_mode' => $request->payment_mode,
            'status' => 'Active',
        ]);

        return redirect()->route('rooms.index')->with('success', "Room {$room->room_number} booked successfully!");
    }
}
