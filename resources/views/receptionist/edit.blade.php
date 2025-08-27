@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Booking</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('receptionist.update', ['booking' => $booking->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="user_id" class="form-label">Guest</label>
            <input type="text" class="form-control" value="{{ $booking->user->name }}" readonly>
        </div>

        <div class="mb-3">
            <label for="room_id" class="form-label">Room</label>
            <select name="room_id" id="room_id" class="form-control" required>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}" {{ $booking->room_id == $room->id ? 'selected' : '' }}>
                        {{ $room->room_number }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Check-In Date</label>
            <input type="date" name="check_in_date" class="form-control" value="{{ $booking->check_in_date }}" required>
        </div>

        <div class="mb-3">
            <label>Check-Out Date</label>
            <input type="date" name="check_out_date" class="form-control" value="{{ $booking->check_out_date }}" required>
        </div>

        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="Accepted" {{ $booking->status == 'Accepted' ? 'selected' : '' }}>Accepted</option>
                <option value="Cancelled" {{ $booking->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                <option value="CheckedIn" {{ $booking->status == 'CheckedIn' ? 'selected' : '' }}>Checked In</option>
                <option value="CheckedOut" {{ $booking->status == 'CheckedOut' ? 'selected' : '' }}>Checked Out</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Notes</label>
            <textarea name="notes" class="form-control">{{ $booking->notes }}</textarea>
        </div>

        <button class="btn btn-primary">Update Booking</button>
        <a href="{{ route('receptionist.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
    