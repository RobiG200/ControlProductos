<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class productoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'code' => $this->faker->word,
        'stock' => $this->faker->randomDigitNotNull,
        'price' => $this->faker->word,
        'category_id' => $this->faker->randomDigitNotNull,
        'subcategory_id' => $this->faker->randomDigitNotNull,
        'creation_date' => $this->faker->date('Y-m-d H:i:s'),
        'last_modified' => $this->faker->date('Y-m-d H:i:s'),
        'image' => $this->faker->word,
        'created_by' => $this->faker->randomDigitNotNull,
        'modified_by' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
