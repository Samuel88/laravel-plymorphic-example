<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => fake()->word() . '.jpg',
            'imageable_id' => Page::all()->random()->id,
            'imageable_type' => Page::class,
        ];
    }
}
