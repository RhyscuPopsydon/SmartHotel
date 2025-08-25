<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 50; $i++) {
            DB::table('rooms')->insert([
                'room_number' => $i,
                'status' => 'vacant',
            ]);
        }
    }
}
