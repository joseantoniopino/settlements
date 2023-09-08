<?php

namespace Database\Factories\Settlements\TradingPost;

use App\Models\Settlements\TradingPost\TradingPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TradingPostFactory extends Factory
{
    protected $model = TradingPost::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'user_id' => User::whereEmail('jose@mail.com')->first()->id,
            'description' => $this->faker->text(),
            'origin' => rand(1, 8),
            'specialty' => rand(1, 6),
            'age' => rand(1, 20),
            'condition' => rand(1, 20),
            'visitor_traffic' => rand(1, 20),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
