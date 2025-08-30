<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $rooms = [];

        // === Normal Rooms: 101–120 ===
        for ($i = 101; $i <= 120; $i++) {
            $rooms[] = [
                'room_number'    => $i,
                'status'         => 'vacant',
                'classification' => 'Normal',
                'price'          => 1200.00,
                'capacity'       => 2,
                'amenities'      => 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom',
                'description'    => 'A comfortable room with all the essentials, perfect for a good night’s rest without breaking the budget.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ];
        }

        // === Deluxe Rooms: 201–215 ===
        for ($i = 201; $i <= 215; $i++) {
            $rooms[] = [
                'room_number'    => $i,
                'status'         => 'vacant',
                'classification' => 'Deluxe',
                'price'          => 2500.00,
                'capacity'       => 3,
                'amenities'      => 'Free WiFi, Air Conditioning, Flat-screen TV, Private Bathroom, Mini Bar',
                'description'    => 'Enjoy comfort and style in this deluxe room, offering extra space and upgraded amenities for a relaxing stay.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ];
        }

        // === VIP Suites: 301–310 ===
        for ($i = 301; $i <= 310; $i++) {
            $rooms[] = [
                'room_number'    => $i,
                'status'         => 'vacant',
                'classification' => 'VIP Suite',
                'price'          => 5000.00,
                'capacity'       => 4,
                'amenities'      => 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Living Area, Private Bathroom',
                'description'    => 'Experience top-class luxury in our VIP suite, where elegance meets comfort with premium services at your fingertips.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ];
        }

        // === Executive Suites: 401–402 ===
        for ($i = 401; $i <= 402; $i++) {
            $rooms[] = [
                'room_number'    => $i,
                'status'         => 'vacant',
                'classification' => 'Executive Suite',
                'price'          => 7000.00,
                'capacity'       => 4,
                'amenities'      => 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Living Area, Work Desk, Conference Access',
                'description'    => 'Perfect for business travelers, our Executive Suite provides a balance of productivity and relaxation.',
                'created_at'     => now(),
                'updated_at'     => now(),
            ];
        }

        // === Presidential Suite: 501 ===
        $rooms[] = [
            'room_number'    => 501,
            'status'         => 'vacant',
            'classification' => 'Presidential Suite',
            'price'          => 15000.00,
            'capacity'       => 6,
            'amenities'      => 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Jacuzzi, Private Pool, Butler Service, Panoramic View',
            'description'    => 'The crown jewel of our hotel — a spacious suite with unmatched luxury, panoramic views, and personalized services.',
            'created_at'     => now(),
            'updated_at'     => now(),
        ];

        // === Honeymoon Suite: 601 ===
        $rooms[] = [
            'room_number'    => 601,
            'status'         => 'vacant',
            'classification' => 'Honeymoon Suite',
            'price'          => 9000.00,
            'capacity'       => 2,
            'amenities'      => 'Free WiFi, Air Conditioning, Flat-screen TV, Mini Bar, Jacuzzi, Romantic Lighting, Private Balcony',
            'description'    => 'Celebrate love in our Honeymoon Suite, designed to create unforgettable memories with romantic ambiance and luxurious touches.',
            'created_at'     => now(),
            'updated_at'     => now(),
        ];

        DB::table('rooms')->insert($rooms);
    }
}
