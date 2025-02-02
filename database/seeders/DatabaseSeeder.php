<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Esegui la logica di seeding del database.
     */
    public function run(): void
    {
        $this->call([
            RoomSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}
