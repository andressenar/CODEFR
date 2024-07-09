<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Category::class;
    public function definition(): array
    {
        
        $name = $this->faker->sentence(3); // Genera un título aleatorio con tres palabras
        return [
            'name' => $this->faker->firstName(),// Este es el nombre completo
            'slug' => Str::slug($this->faker->words(3, true)), // Genera un slug basado en palabras aleatorias
            'created_at' => now(),
            'updated_at' => now(),
        ];
        
    }
}
