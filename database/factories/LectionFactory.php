<?php

namespace Database\Factories;

use App\Models\Lection;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class LectionFactory extends Factory
{
    protected $model = Lection::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->word(),
            'description' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
