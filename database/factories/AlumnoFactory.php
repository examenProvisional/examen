<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $dni = fake()->randomNumber(8);
        $letra =chr(ord('A')+$dni%23);
        $dni="$dni-$letra";
        return [
            'nombre'=>fake()->firstName(),
            'apellido'=>fake()->lastName(),
            'direccion'=>fake()->address(),
            'dni'=>$dni
        ];
    }
}
