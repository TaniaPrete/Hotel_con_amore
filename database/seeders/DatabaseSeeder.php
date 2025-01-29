<?php

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    public function run()
    {
        Room::create([
            'name' => 'Suite 101',
            'description' => 'Una camera spaziosa con vista mare',
            'price' => 120.00,
            'capacity' => 2,
            'is_available' => true,
        ]);

        Room::create([
            'name' => 'Camera Deluxe',
            'description' => 'Una camera elegante con jacuzzi privata',
            'price' => 150.00,
            'capacity' => 2,
            'is_available' => true,
        ]);
    }
}
