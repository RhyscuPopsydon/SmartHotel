@extends('layouts.app')

@section('content')
    <h1>Available Rooms</h1>
    <div style="display:grid; grid-template-columns: repeat(10, 1fr); gap:10px;">
        @foreach ($rooms as $room)
            @if ($room->status == 'vacant')
                <a href="{{ url('/book/' . $room->id) }}" 
                   style="padding:20px; border:1px solid #ccc; border-radius:8px;
                          background:#b2f7b2; text-align:center; text-decoration:none; color:inherit;
                          display:block; cursor:pointer;">
                    <h3>Room {{ $room->room_number }}</h3>
                    <p>Status: Vacant</p>
                </a>
            @else
                <div style="padding:20px; border:1px solid #ccc; border-radius:8px;
                            background:#f7b2b2; text-align:center; opacity:0.6; cursor:not-allowed;">
                    <h3>Room {{ $room->room_number }}</h3>
                    <p>Status: Occupied</p>
                </div>
            @endif
        @endforeach
    </div>
@endsection
