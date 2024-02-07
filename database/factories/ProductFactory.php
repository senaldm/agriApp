<?php

namespace Database\Factories;

use App\Models\Bid;
use App\Models\Category;
use App\Models\Role;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;
;

class ProductFactory extends Factory
{
    public function definition()
    {
        return
        [
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'price'=>$this->faker->numberBetween(100, 500),
            'contact_no'=>$this->faker->bothify('077#######'),
            'featured_image' => $this->faker->imageUrl(),
            'pricing_structure_type' => Bid::class,
            'pricing_structure_id' => Bid::factory(),
            'quantity_in_hand' => $this->faker->numberBetween(0, 500),
            'published_at' => $this->faker->boolean(70) ? $this->faker->dateTimeBetween('-1 year', '+2 months') : null,
            'category_id' => Category::query()->inRandomOrder()->first()->id,
            'user_id' => User::role(Role::ROLE_SELLER)->inRandomOrder()->first()->id,
        ];
    }

}



