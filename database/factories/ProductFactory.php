<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \App\Faker\Provider\PicsumImage($this->faker));
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->realText(),
            'price' => $this->faker->numberBetween($min=100, $max=50000),
            'img' => $this->faker->image('public/storage/images', 640, 480, null, false)
        ];
    }
}
