<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model =Profile::class;
    public function definition(): array
    {
        return [
            //
            'bio' => $this->faker->paragraph,
            // 'gender' => $this->faker->randomElement(['male', 'female', 'others']),
            'gender' => $this->faker->randomElement(['male', 'female', 'others']),
            'religion' => $this->faker->word,
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            }
        ];
    }
}
