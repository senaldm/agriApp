<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfferFactory extends Factory
{
    protected $model = Offer::class;

    public function definition()
    {
        return [
            'ends_at' => $this->faker->dateTimeBetween('+1 months', '+3 months'),
            'normal_price' => $this->faker->randomFloat(2, 500, 5000),
            'discount' => $this->faker->randomFloat(2, 50, 250),
            'user_id' => User::role(Role::ROLE_SELLER)->inRandomOrder()->first()->id,
        ];
    }
}
