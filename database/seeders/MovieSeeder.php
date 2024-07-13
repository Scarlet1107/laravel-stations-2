<?php

namespace Database\Seeders;

use App\Models\Movie; // 修正ポイント
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::factory()->count(50)->create();
    }
}
