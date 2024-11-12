<?php

namespace Database\Factories;

use App\Models\productReport;
use Illuminate\Database\Eloquent\Factories\Factory;

class productReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = productReport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->word,
        'product_code' => $this->faker->word,
        'product_stock' => $this->faker->word,
        'product_price' => $this->faker->word,
        'total_price' => $this->faker->word,
        'creation_date' => $this->faker->date('Y-m-d H:i:s'),
        'modification_date' => $this->faker->date('Y-m-d H:i:s'),
        'category_name' => $this->faker->word,
        'created_by_user' => $this->faker->word,
        'modified_by_user' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
