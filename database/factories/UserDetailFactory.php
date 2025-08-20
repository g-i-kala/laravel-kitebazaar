<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDetail>
 */
class UserDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'display_name' => $this->faker->unique()->userName(),
            'location' => $this->faker->city(),
            'skill_level' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
            'favourtie_spot' => $this->faker->city(),
            'riding_style' => $this->faker->randomElement(['Freeride', 'Freestyle', 'Big Air', 'Wave', 'Foil', 'Race']),
            'bio' => $this->faker->paragraph(3),
            'tagline' => $this->faker->sentence(),
            'social_links' => [
                    $this->faker->url(),
                    $this->faker->url(),
                ],
            'profile_picture' => 'https://i.pravatar.cc/150?img=' . rand(1, 70),
            'current_setup' => $this->faker->paragraph(3),
        ];
    }
}
