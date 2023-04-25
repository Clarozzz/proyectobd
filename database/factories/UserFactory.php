<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'primerNombre' => $this->faker->firstName($gender = 'male'|'female'),
            'primerApellido' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'dni' => $this->faker->ean13(),
            'rtn' => $this->faker->ean13(),
            'fechaNacimiento' => $this->faker->date(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            'fechaAlta' => $this->faker->date(),
            'nombreEmpresa' => $this->faker->randomElement(['', 'Mcdonalds', 'Coca-Cola']),
            'estaHabilitado' => $this->faker->randomElement([true, false]),
            'estaActivo' => $this->faker->randomElement([true, false])
        ];
    }

}
