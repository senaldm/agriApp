<?php

namespace Database\Factories;

use App\Models\Bid;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

class BidFactory extends Factory
{
    protected $model = Bid::class;

    public function definition()
    {
        return [
            'ends_at' => $this->faker->dateTimeBetween('+3 days', '+4 days'),
            'starting_price' => $this->faker->randomFloat(2, 50, 2000),
            'user_id' =>  Auth::user()->id,
        ];
    }
}
