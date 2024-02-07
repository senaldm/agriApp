<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Deal;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Category::all()->each(function (Category $category) {
            Product::factory(2)->create([
                'category_id' => $category->id,
                'user_id' => User::role(Role::ROLE_SELLER)->inRandomOrder()->first()->id,
            ]);

            Product::factory(2)->create([
                'category_id' => $category->id,
                'user_id' => User::role(Role::ROLE_SELLER)->inRandomOrder()->first()->id,
                'pricing_structure_type' => Offer::class,
                'pricing_structure_id' => Offer::factory(),
            ]);

            Product::factory(2)->create([
                'category_id' => $category->id,
                'user_id' => User::role(Role::ROLE_SELLER)->inRandomOrder()->first()->id,
                'pricing_structure_type' => Deal::class,
                'pricing_structure_id' => Deal::factory(),
            ]);
        });


    }
}
