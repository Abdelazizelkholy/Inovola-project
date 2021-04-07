<?php

namespace Database\Factories;

use App\Models\NewLetter;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewLetterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewLetter::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->text,
            'rating' => $this->faker->numberBetween(1,9),
            'agency_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
