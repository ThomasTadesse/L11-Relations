<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // here we are using factory to create a user and then use that user's id to create a post
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
            
            // here we are using faker to generate random data
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
