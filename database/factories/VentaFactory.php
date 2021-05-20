<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' =>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'iva' =>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200),
            'descuento' =>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200),
            'total' =>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200),
        ];
    }
}
