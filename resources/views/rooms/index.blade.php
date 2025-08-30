<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Hotel - Room Blueprint</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #11233B 0%, #0a1a2f 100%);
            color: #CCD3DB;
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        header {
            text-align: center;
            padding: 20px 0;
            margin-bottom: 30px;
        }
        .btn-back {
            display: inline-block;
            background: #2d3748;
            color: #fff;
            padding: 8px 15px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            transition: background 0.2s;
        }
        .btn-back:hover {
            background: #4a5568;
        }
        
        h1 {
            font-size: 2.5rem;
            color: #CCD3DB;
            text-shadow: 0 2px 4px rgba(0,0,0,0.5);
            margin-bottom: 10px;
        }
        
        .subtitle {
            font-size: 1.2rem;
            color: #9ba8b8;
            margin-bottom: 20px;
        }
        
        .hotel-logo {
            font-size: 2rem;
            color: #CCD3DB;
            margin-bottom: 15px;
        }
        
        .blueprint-container {
            background: rgba(17, 35, 59, 0.8);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
        }
        
        .floor-title {
            color: #CCD3DB;
            border-bottom: 2px dashed #5a7a9c;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        
        .rooms-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .room-card {
            background: linear-gradient(145deg, #0d1e32, #142b46);
            border: 1px solid #2a4363;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        
        .room-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            border-color: #CCD3DB;
        }
        
        .room-image {
            width: 100%;
            height: 120px;
            border-radius: 8px;
            object-fit: cover;
            margin-bottom: 12px;
            border: 2px solid #2a4363;
        }
        
        .room-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #CCD3DB;
            margin-bottom: 5px;
        }
        
        .room-class {
            font-size: 0.9rem;
            color: #9ba8b8;
            margin-bottom: 8px;
        }
        
        .room-status {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .status-vacant {
            background-color: #2d4d2d;
            color: #8bc34a;
        }
        
        .status-occupied {
            background-color: #4d2d2d;
            color: #c34a4a;
        }
        
        /* Modal Styles - IMPROVED */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.85);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px);
        }
        
        .modal-content {
            background: linear-gradient(to bottom, #0f2239, #09182c);
            width: 90%;
            max-width: 1000px; /* Increased width for better image display */
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 50px rgba(0, 0, 0, 0.8);
            animation: modalFade 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            border: 1px solid rgba(90, 122, 156, 0.3);
            display: flex;
            flex-direction: column;
            max-height: 90vh;
        }
        
        @keyframes modalFade {
            from {
                opacity: 0;
                transform: scale(0.9) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }
        
        .modal-header {
            padding: 20px 25px;
            background: rgba(12, 26, 44, 0.95);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(42, 67, 99, 0.5);
            position: relative;
        }
        
        .modal-header::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(90, 122, 156, 0.5), transparent);
        }
        
        .modal-title {
            font-size: 1.8rem;
            color: #CCD3DB;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        
        .close-btn {
            background: rgba(204, 211, 219, 0.1);
            border: none;
            color: #CCD3DB;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.5rem;
            cursor: pointer;
            transition: all 0.2s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .close-btn:hover {
            background: rgba(204, 211, 219, 0.2);
            transform: rotate(90deg);
        }
        
        .modal-body {
            padding: 0;
            display: flex;
            flex-direction: row; /* Changed to row for side-by-side layout */
            overflow-y: auto;
            height: 100%;
        }
        
        /* Image/Slideshow Container - Now takes 60% width */
        .modal-image-container {
            position: relative;
            width: 60%; /* Increased width for images */
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .slideshow-container {
            position: relative;
            width: 100%;
            height: 350px; /* Increased height for better image display */
            overflow: hidden;
        }
        
        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease;
            object-fit: cover;
        }
        
        .slide.active {
            opacity: 1;
        }
        
        .slideshow-controls {
            position: absolute;
            bottom: 15px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            gap: 10px;
            z-index: 10;
        }
        
        .slideshow-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .slideshow-dot.active {
            background: #CCD3DB;
            transform: scale(1.2);
        }
        
        .slideshow-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.4);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
        }
        
        .slideshow-nav:hover {
            background: rgba(0, 0, 0, 0.7);
        }
        
        .slideshow-prev {
            left: 15px;
        }
        
        .slideshow-next {
            right: 15px;
        }
        
        .thumbnail-container {
            display: flex;
            gap: 10px;
            padding: 15px;
            overflow-x: auto;
            background: rgba(12, 26, 44, 0.7);
            border-top: 1px solid rgba(42, 67, 99, 0.3);
        }
        
        .thumbnail {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            cursor: pointer;
            opacity: 0.7;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .thumbnail:hover, .thumbnail.active {
            opacity: 1;
            border-color: #CCD3DB;
        }
        
        /* Details Container - Now takes 40% width */
        .modal-details-container {
            width: 40%; /* Reduced width for details */
            padding: 25px;
            display: flex;
            flex-direction: column;
            gap: 25px;
            overflow-y: auto;
        }
        
        .modal-info-section {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .info-group {
            background: rgba(204, 211, 219, 0.03);
            border-radius: 12px;
            padding: 18px;
            border: 1px solid rgba(42, 67, 99, 0.2);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .info-title {
            font-size: 1rem;
            color: #9ba8b8;
            margin-bottom: 8px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .info-title i {
            font-size: 0.9rem;
        }
        
        .info-value {
            font-size: 1.2rem;
            color: #CCD3DB;
            font-weight: 500;
        }
        
        .price-value {
            font-size: 1.8rem;
            color: #CCD3DB;
            font-weight: 600;
            background: linear-gradient(135deg, #0d1e32, #142b46);
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-top: 5px;
            border: 1px solid rgba(90, 122, 156, 0.3);
        }
        
        .amenities-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
        }
        
        .amenity {
            background: rgba(90, 122, 156, 0.15);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: #CCD3DB;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.2s ease;
        }
        
        .amenity:hover {
            background: rgba(90, 122, 156, 0.25);
            transform: translateY(-2px);
        }
        
        .amenity i {
            font-size: 0.8rem;
            color: #9ba8b8;
        }
        
        .modal-footer {
            padding: 20px 25px;
            background: rgba(12, 26, 44, 0.7);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid rgba(42, 67, 99, 0.3);
        }
        
        .room-status-badge {
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            padding: 12px 30px;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-book {
            background: linear-gradient(to right, #8bc34a, #7cb342);
            color: #fff;
            box-shadow: 0 4px 15px rgba(139, 195, 74, 0.3);
        }
        
        .btn-book:hover {
            background: linear-gradient(to right, #7cb342, #8bc34a);
            box-shadow: 0 6px 20px rgba(139, 195, 74, 0.4);
            transform: translateY(-2px);
        }
        
        .btn-book:disabled {
            background: linear-gradient(to right, #4d2d2d, #5a3737);
            color: #c34a4a;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        .btn-close {
            background: rgba(204, 211, 219, 0.1);
            color: #CCD3DB;
        }
        
        .btn-close:hover {
            background: rgba(204, 211, 219, 0.2);
            transform: translateY(-2px);
        }
        
        @media (max-width: 900px) {
            .modal-content {
                width: 95%;
                max-height: 95vh;
            }
            
            .modal-body {
                flex-direction: column;
            }
            
            .modal-image-container {
                width: 100%;
                height: auto;
            }
            
            .slideshow-container {
                height: 250px;
            }
            
            .modal-details-container {
                width: 100%;
                gap: 20px;
            }
            
            .modal-footer {
                flex-direction: column;
                gap: 15px;
                align-items: stretch;
            }
            
            .action-buttons {
                justify-content: center;
            }
        }
        
        @media (max-width: 768px) {
            .rooms-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
            
            .slideshow-container {
                height: 200px;
            }
            
            .modal-title {
                font-size: 1.5rem;
            }
            
            .btn {
                padding: 10px 20px;
            }
            
            .thumbnail {
                width: 60px;
                height: 45px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="hotel-logo">
                <i class="fas fa-hotel"></i> Smart Hotel
            </div>
            <h1>Hotel Room Blueprint</h1>
            <p class="subtitle">Click on any room to view details and make a reservation</p>

            {{-- Back Button --}}
            <div style="margin-top: 15px;">
                <a href="{{ route('dashboard') }}" class="btn-back">
                    <i class="fas fa-arrow-left"></i> Back to Dashboard
                </a>
            </div>
        </header>

        {{-- Floor 1 --}}
        <div class="blueprint-container">
            <h2 class="floor-title">Floor 1</h2>
            <div class="rooms-grid">
                @foreach($rooms->whereBetween('room_number', [100,199]) as $room)
                    <div class="room-card" 
                         data-room-id="{{ $room->id }}"
                         data-room-number="{{ $room->room_number }}"
                         data-classification="{{ $room->classification }}"
                         data-status="{{ $room->status }}"
                         data-price="{{ $room->price ?? 0 }}"
                         data-capacity="{{ $room->capacity ?? '' }}"
                         data-amenities="{{ $room->amenities ?? '' }}"
                         data-images="{{ $room->images ?? '[]' }}">
                         @php
                            // Process room images
                            $images = json_decode($room->images ?? '[]', true);
                            // If no images exist, use classification-based default images
                            if (empty($images) || !is_array($images)) {
                                $classification = strtolower($room->classification);
                                if (strpos($classification, 'suite') !== false) {
                                    $firstImage = 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80';
                                } elseif (strpos($classification, 'deluxe') !== false) {
                                    $firstImage = 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80';
                                } elseif (strpos($classification, 'double') !== false) {
                                    $firstImage = 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80';
                                } else {
                                    $firstImage = 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80';
                                }
                            } else {
                                $firstImage = $images[0];
                            }
                         @endphp
                        <img src="{{ $firstImage }}" alt="Room {{ $room->room_number }}" class="room-image">
                        <div class="room-number">Room {{ $room->room_number }}</div>
                        <div class="room-class">{{ $room->classification }}</div>
                        <span class="room-status status-{{ $room->status }}">
                            {{ ucfirst($room->status) }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Floor 2 --}}
        <div class="blueprint-container">
            <h2 class="floor-title">Floor 2</h2>
            <div class="rooms-grid">
                @foreach($rooms->whereBetween('room_number', [200,299]) as $room)
                    <div class="room-card" 
                         data-room-id="{{ $room->id }}"
                         data-room-number="{{ $room->room_number }}"
                         data-classification="{{ $room->classification }}"
                         data-status="{{ $room->status }}"
                         data-price="{{ $room->price ?? 0 }}"
                         data-capacity="{{ $room->capacity ?? '' }}"
                         data-amenities="{{ $room->amenities ?? '' }}"
                         data-images="{{ $room->images ?? '[]' }}">
                         @php
                            // Process room images
                            $images = json_decode($room->images ?? '[]', true);
                            // If no images exist, use classification-based default images
                            if (empty($images) || !is_array($images)) {
                                $classification = strtolower($room->classification);
                                if (strpos($classification, 'suite') !== false) {
                                    $firstImage = 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80';
                                } elseif (strpos($classification, 'deluxe') !== false) {
                                    $firstImage = 'https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80';
                                } elseif (strpos($classification, 'double') !== false) {
                                    $firstImage = 'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80';
                                } else {
                                    $firstImage = 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80';
                                }
                            } else {
                                $firstImage = $images[0];
                            }
                         @endphp
                        <img src="{{ $firstImage }}" alt="Room {{ $room->room_number }}" class="room-image">
                        <div class="room-number">Room {{ $room->room_number }}</div>
                        <div class="room-class">{{ $room->classification }}</div>
                        <span class="room-status status-{{ $room->status }}">
                            {{ ucfirst($room->status) }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- VIP Suite --}}
        <div class="blueprint-container">
            <h2 class="floor-title">VIP Suite</h2>
            <div class="rooms-grid">
                @foreach($rooms->where('classification', 'VIP Suite') as $room)
                    <div class="room-card" 
                        data-room-id="{{ $room->id }}"
                        data-room-number="{{ $room->room_number }}"
                        data-classification="{{ $room->classification }}"
                        data-status="{{ $room->status }}"
                        data-price="{{ $room->price ?? 0 }}"
                        data-capacity="{{ $room->capacity ?? '' }}"
                        data-amenities="{{ $room->amenities ?? '' }}"
                        data-images="{{ $room->images ?? '[]' }}">
                        @php
                            // Process room images
                            $images = json_decode($room->images ?? '[]', true);
                            // If no images exist, use classification-based default image
                            if (empty($images) || !is_array($images)) {
                                $classification = strtolower($room->classification);
                                if (strpos($classification, 'suite') !== false) {
                                    $firstImage = 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80';
                                } else {
                                    $firstImage = 'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80';
                                }
                            } else {
                                $firstImage = $images[0];
                            }
                        @endphp
                        <img src="{{ $firstImage }}" alt="Room {{ $room->room_number }}" class="room-image">
                        <div class="room-number">Room {{ $room->room_number }}</div>
                        <div class="room-class">{{ $room->classification }}</div>
                        <span class="room-status status-{{ $room->status }}">
                            {{ ucfirst($room->status) }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Executive Suite --}}
        <div class="blueprint-container">
            <h2 class="floor-title">Executive Suite</h2>
            <div class="rooms-grid">
                @foreach($rooms->where('classification', 'Executive Suite') as $room)
                    <div class="room-card" 
                        data-room-id="{{ $room->id }}"
                        data-room-number="{{ $room->room_number }}"
                        data-classification="{{ $room->classification }}"
                        data-status="{{ $room->status }}"
                        data-price="{{ $room->price ?? 0 }}"
                        data-capacity="{{ $room->capacity ?? '' }}"
                        data-amenities="{{ $room->amenities ?? '' }}"
                        data-images="{{ $room->images ?? '[]' }}">
                        @php
                            $images = json_decode($room->images ?? '[]', true);
                            if (empty($images) || !is_array($images)) {
                                $firstImage = 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80';
                            } else {
                                $firstImage = $images[0];
                            }
                        @endphp
                        <img src="{{ $firstImage }}" alt="Room {{ $room->room_number }}" class="room-image">
                        <div class="room-number">Room {{ $room->room_number }}</div>
                        <div class="room-class">{{ $room->classification }}</div>
                        <span class="room-status status-{{ $room->status }}">
                            {{ ucfirst($room->status) }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>


        {{-- Presidential Suite --}}
        <div class="blueprint-container">
            <h2 class="floor-title">Presidential Suite</h2>
            <div class="rooms-grid">
                @foreach($rooms->where('classification', 'Presidential Suite') as $room)
                    <div class="room-card" 
                        data-room-id="{{ $room->id }}"
                        data-room-number="{{ $room->room_number }}"
                        data-classification="{{ $room->classification }}"
                        data-status="{{ $room->status }}"
                        data-price="{{ $room->price ?? 0 }}"
                        data-capacity="{{ $room->capacity ?? '' }}"
                        data-amenities="{{ $room->amenities ?? '' }}"
                        data-images="{{ $room->images ?? '[]' }}">
                        @php
                            $images = json_decode($room->images ?? '[]', true);
                            if (empty($images) || !is_array($images)) {
                                $firstImage = 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80';
                            } else {
                                $firstImage = $images[0];
                            }
                        @endphp
                        <img src="{{ $firstImage }}" alt="Room {{ $room->room_number }}" class="room-image">
                        <div class="room-number">Room {{ $room->room_number }}</div>
                        <div class="room-class">{{ $room->classification }}</div>
                        <span class="room-status status-{{ $room->status }}">
                            {{ ucfirst($room->status) }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>


        {{-- Honeymoon Suite --}}
        <div class="blueprint-container">
            <h2 class="floor-title">Honeymoon Suite</h2>
            <div class="rooms-grid">
                @foreach($rooms->where('classification', 'Honeymoon Suite') as $room)
                    <div class="room-card" 
                        data-room-id="{{ $room->id }}"
                        data-room-number="{{ $room->room_number }}"
                        data-classification="{{ $room->classification }}"
                        data-status="{{ $room->status }}"
                        data-price="{{ $room->price ?? 0 }}"
                        data-capacity="{{ $room->capacity ?? '' }}"
                        data-amenities="{{ $room->amenities ?? '' }}"
                        data-images="{{ $room->images ?? '[]' }}">
                        @php
                            $images = json_decode($room->images ?? '[]', true);
                            if (empty($images) || !is_array($images)) {
                                $firstImage = 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80';
                            } else {
                                $firstImage = $images[0];
                            }
                        @endphp
                        <img src="{{ $firstImage }}" alt="Room {{ $room->room_number }}" class="room-image">
                        <div class="room-number">Room {{ $room->room_number }}</div>
                        <div class="room-class">{{ $room->classification }}</div>
                        <span class="room-status status-{{ $room->status }}">
                            {{ ucfirst($room->status) }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

    </div>


    <!-- Modal -->
    <div id="roomModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modalRoomTitle"></h2>
                <button class="close-btn" id="closeModal">&times;</button>
            </div>
            
            <div class="modal-body">
                <div class="modal-image-container">
                    <div class="slideshow-container" id="slideshowContainer">
                        <!-- Slides will be inserted here via JavaScript -->
                    </div>
                    
                    <button class="slideshow-nav slideshow-prev" id="prevSlide">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="slideshow-nav slideshow-next" id="nextSlide">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                    <div class="slideshow-controls" id="slideshowDots">
                        <!-- Dots will be inserted here via JavaScript -->
                    </div>
                    
                    <div class="thumbnail-container" id="thumbnailContainer">
                        <!-- Thumbnails will be inserted here via JavaScript -->
                    </div>
                </div>
                
                <div class="modal-details-container">
                    <div class="modal-info-section">
                        <div class="info-group">
                            <div class="info-title"><i class="fas fa-star"></i> Classification</div>
                            <div class="info-value" id="modalClassification"></div>
                        </div>
                        
                        <div class="info-group">
                            <div class="info-title"><i class="fas fa-users"></i> Capacity</div>
                            <div class="info-value" id="modalCapacity"></div>
                        </div>
                        
                        <div class="info-group">
                            <div class="info-title"><i class="fas fa-concierge-bell"></i> Amenities</div>
                            <div class="amenities-container" id="modalAmenities"></div>
                        </div>
                    </div>
                    
                    <div class="modal-info-section">
                        <div class="info-group">
                            <div class="info-title"><i class="fas fa-tag"></i> Price Per Night</div>
                            <div class="price-value" id="modalPrice"></div>
                        </div>
                        
                        <div class="info-group">
                            <div class="info-title"><i class="fas fa-info-circle"></i> Additional Information</div>
                            <p style="color: #9ba8b8; line-height: 1.6; margin-top: 10px;">
                                All rooms include premium bedding, blackout curtains, and soundproofing for your comfort.
                                Housekeeping service is provided daily. Room service is available 24/7.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <span class="room-status-badge" id="modalStatusBadge"></span>
                <div class="action-buttons">
                    <button class="btn btn-close" id="cancelBtn">Close</button>
                    <button class="btn btn-book" id="bookBtn">Book Now</button>
                </div>
            </div>
        </div>
    </div>

    <script>
    const modal = document.getElementById('roomModal');
    const closeModalBtn = document.getElementById('closeModal');
    const cancelBtn = document.getElementById('cancelBtn');
    const bookBtn = document.getElementById('bookBtn');
    const slideshowContainer = document.getElementById('slideshowContainer');
    const slideshowDots = document.getElementById('slideshowDots');
    const thumbnailContainer = document.getElementById('thumbnailContainer');
    const prevSlideBtn = document.getElementById('prevSlide');
    const nextSlideBtn = document.getElementById('nextSlide');

    let currentSlideIndex = 0;
    let slideshowImages = [];
    let slideshowInterval;

    function initSlideshow(images) {
        slideshowContainer.innerHTML = '';
        slideshowDots.innerHTML = '';
        thumbnailContainer.innerHTML = '';
        if (slideshowInterval) clearInterval(slideshowInterval);

        if (images.length === 0) {
            images = ['https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=600&q=80'];
        }

        images.forEach((image, index) => {
            const slide = document.createElement('img');
            slide.src = image;
            slide.alt = `Room image ${index + 1}`;
            slide.className = 'slide';
            if (index === 0) slide.classList.add('active');
            slideshowContainer.appendChild(slide);

            const dot = document.createElement('div');
            dot.className = 'slideshow-dot';
            if (index === 0) dot.classList.add('active');
            dot.dataset.index = index;
            dot.addEventListener('click', () => goToSlide(index));
            slideshowDots.appendChild(dot);

            const thumbnail = document.createElement('img');
            thumbnail.src = image;
            thumbnail.alt = `Thumbnail ${index + 1}`;
            thumbnail.className = 'thumbnail';
            if (index === 0) thumbnail.classList.add('active');
            thumbnail.dataset.index = index;
            thumbnail.addEventListener('click', () => goToSlide(index));
            thumbnailContainer.appendChild(thumbnail);
        });

        currentSlideIndex = 0;
        slideshowImages = images;

        if (images.length > 1) {
            slideshowInterval = setInterval(nextSlide, 5000);
        }
    }

    function goToSlide(index) {
        document.querySelectorAll('.slide').forEach((slide, i) => slide.classList.toggle('active', i === index));
        document.querySelectorAll('.slideshow-dot').forEach((dot, i) => dot.classList.toggle('active', i === index));
        document.querySelectorAll('.thumbnail').forEach((thumb, i) => thumb.classList.toggle('active', i === index));
        currentSlideIndex = index;

        if (slideshowInterval) {
            clearInterval(slideshowInterval);
            if (slideshowImages.length > 1) slideshowInterval = setInterval(nextSlide, 5000);
        }
    }

    function nextSlide() { goToSlide((currentSlideIndex + 1) % slideshowImages.length); }
    function prevSlide() { goToSlide((currentSlideIndex - 1 + slideshowImages.length) % slideshowImages.length); }

    prevSlideBtn.addEventListener('click', prevSlide);
    nextSlideBtn.addEventListener('click', nextSlide);

    document.querySelectorAll('.room-card').forEach(card => {
        card.addEventListener('click', function() {
            document.getElementById('modalRoomTitle').textContent = `Room ${this.dataset.roomNumber}`;
            document.getElementById('modalClassification').textContent = this.dataset.classification;
            document.getElementById('modalCapacity').textContent = `${this.dataset.capacity} Guests`;
            document.getElementById('modalPrice').textContent = `₱${parseFloat(this.dataset.price).toLocaleString('en-US', {minimumFractionDigits: 2})}`;

            // **Use data-images if available, otherwise default by classification**
            let images = [];
            try {
                images = JSON.parse(this.dataset.images) || [];
            } catch {
                images = [];
            }

            if (images.length === 0) {
                const cls = this.dataset.classification.toLowerCase();
                if (cls.includes('suite')) images = [
                    'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1611892440504-42a792e24d32?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1564078516393-cf04bd966897?auto=format&fit=crop&w=600&q=80'
                ];
                else if (cls.includes('deluxe')) images = [
                    'https://images.unsplash.com/photo-1566665797739-1674de7a421a?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1590490360182-c33d57733427?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1578683010236-d716f9a3f461?auto=format&fit=crop&w=600&q=80'
                ];
                else if (cls.includes('double')) images = [
                    'https://images.unsplash.com/photo-1631049307264-da0ec9d70304?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1564501049412-61c2a3083791?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1560448204-603b3fc33ddc?auto=format&fit=crop&w=600&q=80'
                ];
                else images = [
                    'https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1576359870757-5d4556e3a8f8?auto=format&fit=crop&w=600&q=80',
                    'https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?auto=format&fit=crop&w=600&q=80'
                ];
            }

            initSlideshow(images);

            const statusBadge = document.getElementById('modalStatusBadge');
            statusBadge.textContent = this.dataset.status.toUpperCase();
            statusBadge.className = 'room-status-badge';
            if (this.dataset.status === 'occupied') {
                statusBadge.classList.add('status-occupied');
                statusBadge.innerHTML = '<i class="fas fa-times-circle"></i> ' + statusBadge.textContent;
            } else {
                statusBadge.classList.add('status-vacant');
                statusBadge.innerHTML = '<i class="fas fa-check-circle"></i> ' + statusBadge.textContent;
            }

            const amenitiesContainer = document.getElementById('modalAmenities');
            amenitiesContainer.innerHTML = '';
            ['Free WiFi', 'Air Conditioning', 'TV', 'Safe'].forEach(a => {
                const div = document.createElement('div');
                div.className = 'amenity';
                div.innerHTML = `<i class="fas fa-check"></i> ${a}`;
                amenitiesContainer.appendChild(div);
            });
            if (this.dataset.amenities) {
                this.dataset.amenities.split(',').forEach(a => {
                    if (a.trim() !== '') {
                        const div = document.createElement('div');
                        div.className = 'amenity';
                        div.innerHTML = `<i class="fas fa-check"></i> ${a.trim()}`;
                        amenitiesContainer.appendChild(div);
                    }
                });
            }

            modal.style.display = 'flex';

            // Assign roomId to Book button
            bookBtn.dataset.roomId = this.dataset.roomId;

            if (this.dataset.status === 'occupied') {
                bookBtn.disabled = true;
                bookBtn.innerHTML = '<i class="fas fa-times"></i> Not Available';
            } else {
                bookBtn.disabled = false;
                bookBtn.innerHTML = '<i class="fas fa-calendar-check"></i> Book Now';
            }
        });
    });

    function closeModal() {
        modal.style.display = 'none';
        if (slideshowInterval) clearInterval(slideshowInterval);
    }

    closeModalBtn.addEventListener('click', closeModal);
    cancelBtn.addEventListener('click', closeModal);
    window.addEventListener('click', e => { if (e.target === modal) closeModal(); });

    bookBtn.addEventListener('click', function() {
        if (!this.disabled) {
            const roomId = this.dataset.roomId;
            if (roomId) {
                window.location.href = "{{ url('rooms') }}/" + roomId + "/book";
            }
        }
    });
</script>

</body>
</html>


