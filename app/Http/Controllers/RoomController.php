<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\Booking; // Import Booking model
use App\Models\User;


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

        if ($room->status === 'occupied') {
            return redirect()->route('rooms.index')->with('error', 'Room is already occupied.');
        }

        // ✅ Check kung naka-login gamit session
        if (!session()->has('user_id')) {
            return redirect()->route('login')->with('error', 'Please login to book a room.');
        }

        // ✅ Fetch full user model instead of just ID
        $user = User::find(session('user_id'));

        return view('rooms.book', compact('room', 'user'));
    }



    // Store booking
    public function storeBooking(Request $request, $roomId)
{
    try {
        $room = Room::findOrFail($roomId);

        // 🔑 Kunin user mula sa session (adjust depende sa login mo)
        $userId = session('user_id'); 
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('rooms.index')->with('error', 'You must be logged in to book.');
        }

        // 1️⃣ Create booking record
        $booking = $user->bookings()->create([
            'room_id'        => $room->id,
            'check_in_date'  => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'check_in_time'  => $request->check_in_time,
            'notes'          => $request->notes,
            'user_id'        => $user->id,
        ]);

        // 2️⃣ Update room status kung successful ang booking
        if ($booking) {
            $room->update(['status' => 'occupied']);
        }

        return redirect()->route('rooms.index')
            ->with('success', "Room {$room->room_number} booked successfully!");

    } catch (\Exception $e) {
        return back()->with('error', 'Booking failed: ' . $e->getMessage());
    }
}


}
