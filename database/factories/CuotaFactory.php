<?php

namespace Database\Factories;

use App\Models\Cuota;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hermano;

class CuotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cuota::class;

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
            'motivo'=>$this->faker->text($maxNbChars = 100),
            'estado'=>$this->faker->randomElement($array = array ('Pagado','Pendiente')),
            'precio'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'hermano_id'=>$hermanos->get(rand(0, count($hermanos)-1))
        ];
    }
}
