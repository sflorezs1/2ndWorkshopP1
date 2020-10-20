<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->name,
            'content' => $this->faker->realText(),
            'stars' => $this->faker->numberBetween($min=0, $max=5),
            'product_id' => $this->faker->numberBetween($min=1, $max=100)
        ]; // product_id is a foreign key, but this is a test so we are going
           // to use exactly 100 products
    }
}
