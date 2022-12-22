<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
                'NamaMakanan' => $this->faker->name(),
                'AsalMakanan' => $this->faker->name(),
                'TanggalExpired' => now(),
                'Kuantitas' => $this->faker->numberBetween(10,200), // password
                'remember_token' => Str::random(10),
        
    
        ];
    }
}
