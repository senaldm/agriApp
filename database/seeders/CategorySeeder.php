<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::query()->insert([
            ['name' => 'Vegetables', 'slug' => 'vegetables'],
            ['name' => 'Fruits', 'slug' => 'fruits'],
            ['name' => 'Crops', 'slug' => 'crops'],
            ['name' => 'Groceries', 'slug' => 'groceries'],
            ['name' => 'Spices', 'slug' => 'spices'],
            ['name' => 'Coconuts', 'slug' => 'coconuts'],
        ]);
    }
}
