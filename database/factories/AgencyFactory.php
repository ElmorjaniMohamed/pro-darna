<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Agency;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agency>
 */
class AgencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agency::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'zipCode' => substr($this->faker->postcode, 0, 5),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->companyEmail,
            'number_of_agent' => $this->faker->numberBetween(1, 50),
            'webSite' => $this->faker->url,
        ];
    }
}