<?php

namespace Database\Factories;

use App\Models\Hotels;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hotels::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'yourName' => $this->faker->word,
        'yourAddress' => $this->faker->word,
        'hotelName' => $this->faker->word,
        'hotelNumber' => $this->faker->word,
        'hotelAddress' => $this->faker->word,
        'dateAttended' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
