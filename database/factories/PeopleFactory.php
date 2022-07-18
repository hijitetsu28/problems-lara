<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = People::class;

    
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->Email
        ];
    }
}
