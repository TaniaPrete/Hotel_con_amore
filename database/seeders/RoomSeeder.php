<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Esegui la logica di seeding.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'name' => 'Suite 101',
                'description' => 'Una camera spaziosa con vista mare',
                'price' => 120.00,
                'capacity' => 2,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Camera Deluxe',
                'description' => 'Una camera elegante con jacuzzi privata',
                'price' => 150.00,
                'capacity' => 2,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
