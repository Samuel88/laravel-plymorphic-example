<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Page;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SeoField>
 */
class SeoFieldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'meta_title' => fake()->name(),
            'seo_fieldable_id' => Page::all()->first(),
            'seo_fieldable_type' => Page::class,
        ];
    }
}
