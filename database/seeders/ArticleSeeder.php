<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Esegui la logica di seeding.
     */
    public function run(): void
    {
        // Inserisce articoli di esempio nel database
        DB::table('articles')->insert([
            [
                'title' => 'Benvenuto nel nostro Hotel!',
                'author' => 'Admin',
                'content' => 'Scopri i nostri servizi e le camere più eleganti!',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '5 Consigli per un soggiorno perfetto',
                'author' => 'Admin',
                'content' => 'Ecco come rendere il tuo soggiorno indimenticabile!',
                'published_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

