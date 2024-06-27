<?php

namespace Database\Factories;

use App\Models\Plant;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlantFactory extends Factory
{
    protected $model = Plant::class;

    public function definition()
    {
        return [
            'regional_admins_id' => \App\Models\RegionalAdmin::factory(),
            'name' => $this->faker->word,
            'leaf_width' => $this->faker->randomFloat(2, 0.1, 10),
            'class_id' => \App\Models\Classes::factory(),
            'image' => $this->faker->imageUrl(),
            'type' => $this->faker->word,
            'height' => $this->faker->randomFloat(2, 1, 100),
            'diameter' => $this->faker->randomFloat(2, 0.1, 10),
            'leaf_color' => $this->faker->safeColorName,
            'watering_frequency' => $this->faker->word,
            'light_intensity' => $this->faker->word,
        ];
    }
}
