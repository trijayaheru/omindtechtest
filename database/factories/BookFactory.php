<?php

namespace Database\Factories;

use App\Helpers\DateHelper;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title                  = $this->faker->sentence(3);
        return [
            'name'              => substr($title, 0, strlen($title) - 1),
            'description'       => $this->faker->text(200),
            'published_date'    => $this->faker->dateTimeThisCentury('now'),
            'status'            => 1,
            'author_id'         => rand(1, 10),
            'created_at'        => DateHelper::getCurrentDateTime(),
            'updated_at'        => DateHelper::getCurrentDateTime(),
        ];
    }
}
