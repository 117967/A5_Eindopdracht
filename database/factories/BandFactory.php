<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Band>
 */
class BandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'band_name' => $this->faker->company(),
            'user_id' => User::all()->random()->user_id,
            'band_genre' => 'metal, experimental, heavy metal',
            'band_email' => $this->faker->companyEmail(),
            'band_website' => $this->faker->url(),
            'band_location' => $this->faker->city(),
            'description' => $this->faker->paragraph(10),
        ];
    }
}
