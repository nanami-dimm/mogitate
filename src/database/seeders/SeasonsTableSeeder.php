<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Season;
use Illuminate\Support\Facades\DB;

class SeasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::factory()->count(4)->create();
    }
}
