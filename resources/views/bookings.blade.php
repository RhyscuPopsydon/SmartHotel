@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Bookings</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Guest</th>
                <th>Room</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->user->name }}</td>
                <td>{{ $booking->room->room_number }}</td>
                <td>{{ $booking->check_in_date }}</td>
                <td>{{ $booking->check_out_date }}</td>
                <td>{{ $booking->status }}</td>
                <td>
                    <form action="{{ route('receptionist.updateStatus', $booking->id) }}" method="POST">
                        @csrf
                        <select name="status" class="form-select" required>
                            <option value="">Change Status</option>
                            <option value="Accepted">Accept</option>
                            <option value="Cancelled">Cancel</option>
                        </select>
                        <button type="submit" class="btn btn-primary btn-sm mt-1">Update</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
