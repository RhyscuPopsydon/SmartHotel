@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Booking</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('receptionist.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Guest</label>
            <select name="user_id" id="user_id" class="form-control" required>
                <option value="">-- Select Guest --</option>
                @foreach($guests as $guest)
                    <option value="{{ $guest->id }}">{{ $guest->name }} ({{ $guest->email }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="room_id" class="form-label">Room</label>
            <select name="room_id" id="room_id" class="form-control" required>
                <option value="">-- Select Room --</option>
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->room_number }} ({{ $room->status }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Check-In Date</label>
            <input type="date" name="check_in_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Check-Out Date</label>
            <input type="date" name="check_out_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Check-In Time (optional)</label>
            <input type="time" name="check_in_time" class="form-control">
        </div>

        <div class="mb-3">
            <label>Notes</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>

        <button class="btn btn-success">Create Booking</button>
        <a href="{{ route('receptionist.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
