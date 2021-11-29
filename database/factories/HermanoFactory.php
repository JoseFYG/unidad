<?php

namespace Database\Factories;

use App\Models\Hermano;
use Illuminate\Database\Eloquent\Factories\Factory;

class HermanoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hermano::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->firstName(),
            'apellidos'=>$this->faker->lastName()." ".$this->faker->lastName(),
            'direccion'=>$this->faker->streetAddress(),
            'dni'=>$this->faker->unique()->dni(),
            'telefono'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->freeEmail(),
            'numero'=>0,
            'fechaNac'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'fechaIng'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'cortejo'=>$this->faker->randomElement($array = array ('Nazareno','Mantilla', 'Costalero', 'Acólito')),
            'medalla'=>$this->faker->randomElement($array = array ('Con Medalla','Sin Medalla')),
        ];
    }
}
