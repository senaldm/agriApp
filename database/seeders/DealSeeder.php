<?php

namespace Database\Seeders;

use App\Models\Deal;
use Illuminate\Database\Seeder;

class DealSeeder extends Seeder
{
    public function run()
    {
        Deal::factory(8)->create();
    }
}
