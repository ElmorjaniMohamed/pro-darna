<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Agency;
use App\Models\Category;
use App\Models\PropertyType;
use App\Models\Proprety;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proprety>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'price' => $this->faker->numberBetween(100000, 500000),
            'description' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'zipCode' => $this->faker->randomNumber(5, true),
            'status' => $this->faker->randomElement(['high price', 'low price']),
            'area' => $this->faker->randomElement(['Area 1', 'Area 2', 'Area 3']),
            'nbr_of_bedroom' => $this->faker->numberBetween(1, 5),
            'nbr_of_bathroom' => $this->faker->numberBetween(1, 3),
            'nbr_of_garage' => $this->faker->numberBetween(1, 2),
            'agency_id' => Agency::factory(),
            'property_type_id' => PropertyType::factory(),
            'category_id' => Category::factory(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}