@extends('layouts.app')

@section('content')
<div class="container" style="max-width:500px; margin:auto; padding:20px; background:#fff3e0; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1);">
    <h2 style="text-align:center; margin-bottom:20px;">Reserve Room {{ $room->room_number }}</h2>

    <form method="POST" action="{{ route('rooms.storeBooking', $room->id) }}">
        @csrf

        <div style="margin-bottom:10px;">
            <label>Name:</label>
            <input type="text" value="{{ $user->name }}" readonly style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Email:</label>
            <input type="email" value="{{ $user->email }}" readonly style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Mobile:</label>
            <input type="text" value="{{ $user->contact_number }}" readonly style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Check-in Time:</label>
            <input type="time" name="check_in_time" required style="width:100%; padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Mode of Payment:</label>
            <select name="payment_mode" required style="width:100%; padding:8px;">
                <option value="">Select Payment Method</option>
                <option value="Cash">Cash</option>
                <option value="GCash">GCash</option>
                <option value="Credit Card">Credit Card</option>
            </select>
        </div>

        <button type="submit" style="width:100%; padding:10px; background:#ffb74d; border:none; border-radius:5px; cursor:pointer;">Confirm Booking</button>
    </form>
</div>
@endsection
