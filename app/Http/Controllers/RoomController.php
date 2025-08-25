<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

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
}
