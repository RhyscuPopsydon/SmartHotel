<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $rooms = [];

        // Normal Rooms: 101–120
        for ($i = 101; $i <= 120; $i++) {
            $rooms[] = [
                'room_number'    => $i,
                'status'         => 'vacant',
                'classification' => 'Normal',
                'description'    => 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.',
            ];
        }

        // Deluxe Rooms: 201–215
        for ($i = 201; $i <= 215; $i++) {
            $rooms[] = [
                'room_number'    => $i,
                'status'         => 'vacant',
                'classification' => 'Deluxe',
                'description'    => 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.',
            ];
        }

        // VIP Suites: 301–310
        for ($i = 301; $i <= 310; $i++) {
            $rooms[] = [
                'room_number'    => $i,
                'status'         => 'vacant',
                'classification' => 'VIP Suite',
                'description'    => 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.',
            ];
        }

        // Executive Suites: 401–402
        for ($i = 401; $i <= 402; $i++) {
            $rooms[] = [
                'room_number'    => $i,
                'status'         => 'vacant',
                'classification' => 'Executive Suite',
                'description'    => 'Perfect for business travelers, our Executive Suite provides a balance of productivity and relaxation.',
            ];
        }

        // Presidential Suite: 501
        $rooms[] = [
            'room_number'    => 501,
            'status'         => 'vacant',
            'classification' => 'Presidential Suite',
            'description'    => 'The crown jewel of our hotel — a spacious suite with unmatched luxury, panoramic views, and personalized services.',
        ];

        // Honeymoon Suite: 601
        $rooms[] = [
            'room_number'    => 601,
            'status'         => 'vacant',
            'classification' => 'Honeymoon Suite',
            'description'    => 'Celebrate love in our Honeymoon Suite, designed to create unforgettable memories with romantic ambiance and luxurious touches.',
        ];

        DB::table('rooms')->insert($rooms);
    }
}
