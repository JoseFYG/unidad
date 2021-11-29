<?php

namespace Database\Factories;

use App\Models\Donativo;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hermano;

class DonativoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donativo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hermanos=Hermano::all('id');
        return [
            'ano'=>$this->faker->year($max = 'now'),
            'dinero'=>$this->faker->randomElement($array = array ('Enseres','Dinero')),
            'info'=>$this->faker->text($maxNbChars = 100),
            'hermano_id'=>$hermanos->get(rand(0, count($hermanos)-1))
        ];
    }
}
