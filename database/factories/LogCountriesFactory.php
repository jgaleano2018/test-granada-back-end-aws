<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->id(),
            'username' => $this->faker->username(),
            'request_timestamp' => $this->faker->request_timestamp(),
            'num_countries_returned' => $this->faker->num_countries_returned(),
            'countries_details' => $this->faker->countries_details(),
            'created_date' => $this->faker->created_date(),
        ];
    }

}
