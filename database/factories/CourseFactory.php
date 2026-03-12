<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'courseKey' => $this->faker->unique()->lexify('Rob???'), // Genera cadenas como 'Rob101'
            'title' => $this->faker->sentence(4),
            'coverImage' => $this->faker->imageUrl(),
            'content' => $this->faker->paragraphs(3, true),
            'kit_id' => $this->faker->numberBetween(1, 3), // Lo asocia con uno de los 3 kits creados
        ];
    }
}
