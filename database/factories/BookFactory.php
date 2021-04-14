<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($this->faker->numberBetween(10,30)), //title
            'excerpt' => $this->faker->text,
            'pages' => $this->faker->numberBetween(30, 1000),
            'isbn' => $this->faker->isbn13,
            'published' => $this->faker->datetime(),
            // 'added_to_library' => $this->faker->datetime(),
        ];
    }
}
