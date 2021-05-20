<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' =>$this->faker->randomElement
                    ($array = array ('Producto1','Producto2','Producto3', 'Producto4', 'Producto5')),
            'precio' =>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200),
            'cantidad' =>$this->faker->numberBetween($min = 10, $max = 30),

        ];
    }
}
