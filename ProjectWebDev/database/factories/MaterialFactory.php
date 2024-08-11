<?php

namespace Database\Factories;

use App\Models\Material;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Materi>
 */
class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->dateTimeBetween('-5 months', 'now');

        return [
            'title' => fake()->sentence(2),
            'description' => fake()->paragraph(1),
            'material_link'=> Str::random(20),
            'course_id' => fake()->randomElement(Course::all()->pluck('id')), 
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
