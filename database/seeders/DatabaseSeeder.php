<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Keyword;
use App\Models\Synonym;
use App\Models\Link;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            FaqSeeder::class,
            KeywordSeeder::class,
            SynonymSeeder::class,
            LinkSeeder::class
        ]);
    }
}
