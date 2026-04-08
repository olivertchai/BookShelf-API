<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genre;
/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            //Isso é uma segurança. Se você rodar o factory e não houver nenhum gênero no banco, ele cria um. Se já houver, ele pega um aleatório.
            'genre_id' => Genre::inRandomOrder()->first()->id ?? Genre::factory(),
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'pages' => $this->faker->numberBetween(150, 450),
            'status' => $this->faker->randomElement(['to_read', 'reading', 'finished']),
            'rating' => $this->faker->numberBetween(1, 5)

        ];
    }
}
