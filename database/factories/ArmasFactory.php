<?php

namespace Database\Factories;

use App\Models\TipoArma;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArmasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "numero" => $this->faker->randomNumber(7, true),
            "tipo_id" => $this->faker->randomElement(TipoArma::pluck('id'))
        ];
    }
}
