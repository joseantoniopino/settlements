<?php

namespace Database\Factories\Settlements\TradingPost;

use App\Models\Settlements\TradingPost\TradingPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TradingPostFactory extends Factory
{
    protected $model = TradingPost::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'origin' => $this->faker->randomNumber(),
            'specialty' => $this->faker->randomNumber(),
            'condition' => $this->faker->randomNumber(),
            'visitor_traffic' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
