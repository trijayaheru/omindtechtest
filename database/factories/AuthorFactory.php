<?php

namespace Database\Factories;

use App\Helpers\DateHelper;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name,
            'address'           => $this->faker->address,
            'phone_number'      => $this->faker->phoneNumber,
            'city'              => $this->faker->city,
            'status'            => 1,
            'created_at'        => DateHelper::getCurrentDateTime(),
            'updated_at'        => DateHelper::getCurrentDateTime(),
        ];
    }
}
