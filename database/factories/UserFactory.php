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
        $email = $this->faker->email;
        return [
            'first_name' => $this->faker->word,
            'last_name' => $this->faker->word,
            'avatar' => $this->faker->word,
            'pseudo' => $this->faker->word,
            'password' => substr($this->faker->word, 0, 8),
            'email' => $email
        ];
    }
}
