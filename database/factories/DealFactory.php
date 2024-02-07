<?php

namespace Database\Factories;

use App\Models\Deal;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealFactory extends Factory
{
    protected $model = Deal::class;

    public function definition()
    {
        return [
            'price' => $this->faker->randomFloat(2, 500, 5000),
            'user_id' => User::role(Role::ROLE_SELLER)->inRandomOrder()->first()->id,
        ];
    }
}
