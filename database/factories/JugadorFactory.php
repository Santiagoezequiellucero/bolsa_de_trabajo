<?php

namespace Database\Factories;

use App\Models\Jugador;
use Illuminate\Database\Eloquent\Factories\Factory;

class JugadorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Jugador::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres'=>$this->faker->firstName(),
            'apellido_paterno'=>$this->faker->lastName,
            'email'=>$this->faker->unique()->safeEmail
        ];
    }
}
