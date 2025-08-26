@extends('layouts.app')

@section('content')
    <h1 style="text-align:center; color: #fff; margin-bottom: 20px;">Hotel Room Blueprint</h1>

    <div style="background: #0a1a2f; padding: 30px; border-radius: 10px;">
        @php
            // Group rooms by floor (based on first digit of room number)
            $groupedRooms = $rooms->groupBy(function($room) {
                return floor($room->room_number / 100); // 1 for 100s, 2 for 200s, etc.
            });

            // Classification styles
            $styles = [
                'Normal' => '#81d4fa',        // Light blue
                'Deluxe' => '#ffe082',        // Amber
                'VIP Suite' => '#ce93d8',     // Purple
                'Executive Suite' => '#a5d6a7', // Green
                'Presidential Suite' => '#fff176', // Yellow
                'Honeymoon Suite' => '#f48fb1', // Pink
            ];
        @endphp

        @foreach ($groupedRooms as $floor => $floorRooms)
            <div style="margin-bottom: 40px;">
                <h2 style="color:#ffffff; border-bottom: 1px dashed #ffffff; padding-bottom: 5px;">Floor {{ $floor }}</h2>
                <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 15px; margin-top: 15px;">
                    @foreach ($floorRooms as $room)
                        @php
                            $color = $styles[$room->classification] ?? '#b0bec5';
                            $borderColor = $room->status === 'vacant' ? $color : '#b0bec5';
                            $opacity = $room->status === 'vacant' ? 1 : 0.4;
                        @endphp

                        <div 
                            @if ($room->status === 'vacant')
                                onclick="window.location='{{ route('rooms.showBooking', $room->id) }}'"
                            @endif
                            style="background:none; border: 2px solid {{ $borderColor }};
                                   padding:15px; border-radius:6px; text-align:center;
                                   cursor:{{ $room->status === 'vacant' ? 'pointer' : 'not-allowed' }};
                                   color:{{ $color }}; opacity:{{ $opacity }};
                                   transition: transform 0.2s; position:relative;"
                            onmouseover="this.style.transform='scale(1.05)'"
                            onmouseout="this.style.transform='scale(1)'"
                        >
                            <h3 style="margin:0; font-size: 1.2em;">Room {{ $room->room_number }}</h3>
                            <p style="margin:5px 0; font-size:0.9em;">{{ $room->classification }}</p>
                            <p style="margin:0; font-size:0.8em;">{{ ucfirst($room->status) }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
